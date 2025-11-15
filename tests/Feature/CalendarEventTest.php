<?php

namespace Tests\Feature;

use App\Models\CalendarEvent;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CalendarEventTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_lists_events_with_occurrences(): void
    {
        Carbon::setTestNow('2024-01-01 00:00:00');

        CalendarEvent::factory()->create([
            'title' => 'One-off sync',
            'starts_at' => Carbon::parse('2024-01-05 10:00:00'),
            'ends_at' => Carbon::parse('2024-01-05 11:00:00'),
        ]);

        CalendarEvent::create([
            'title' => 'Weekly planning',
            'description' => 'Recurring standup',
            'location' => 'Board room',
            'color' => '#2563eb',
            'is_all_day' => false,
            'timezone' => 'UTC',
            'starts_at' => Carbon::parse('2024-01-01 09:00:00'),
            'ends_at' => Carbon::parse('2024-01-01 10:00:00'),
            'rrule' => 'FREQ=WEEKLY;INTERVAL=1;BYDAY=MO,WE',
            'recurrence_ends_at' => Carbon::parse('2024-02-01 00:00:00'),
        ]);

        $response = $this->getJson('/api/calendar/events?start=2024-01-01&end=2024-01-31');

        $response->assertOk()->assertJsonStructure(['data']);

        $this->assertCount(2, $response->json('data'));
    }

    public function test_it_creates_calendar_events(): void
    {
        $payload = [
            'title' => 'Demo',
            'description' => 'Kickoff call',
            'location' => 'Zoom',
            'start_date' => '2024-01-10',
            'end_date' => '2024-01-10',
            'start_time' => '09:00',
            'end_time' => '10:00',
            'all_day' => false,
            'color' => '#2563eb',
            'rrule' => 'FREQ=DAILY;INTERVAL=1;COUNT=3',
            'recurrence_ends_at' => '2024-01-12',
            'timezone' => 'UTC',
        ];

        $response = $this->postJson('/api/calendar/events', $payload);

        $response->assertCreated()->assertJsonPath('data.title', 'Demo');

        $this->assertDatabaseHas('calendar_events', [
            'title' => 'Demo',
            'rrule' => 'FREQ=DAILY;INTERVAL=1;COUNT=3',
        ]);
    }

    public function test_it_updates_calendar_events(): void
    {
        $event = CalendarEvent::factory()->create([
            'title' => 'Town Hall',
            'starts_at' => Carbon::parse('2024-01-05 10:00:00'),
            'ends_at' => Carbon::parse('2024-01-05 11:00:00'),
            'timezone' => 'UTC',
        ]);

        $payload = [
            'title' => 'Updated Town Hall',
            'description' => 'All-hands',
            'location' => 'Auditorium',
            'start_date' => '2024-01-12',
            'end_date' => '2024-01-13',
            'start_time' => null,
            'end_time' => null,
            'all_day' => true,
            'color' => '#f97316',
            'rrule' => null,
            'recurrence_ends_at' => null,
            'timezone' => 'UTC',
        ];

        $response = $this->putJson("/api/calendar/events/{$event->id}", $payload);

        $response->assertOk()->assertJsonPath('data.title', 'Updated Town Hall');

        $this->assertDatabaseHas('calendar_events', [
            'id' => $event->id,
            'title' => 'Updated Town Hall',
            'is_all_day' => true,
        ]);
    }

    public function test_recurrence_ends_at_limits_generated_occurrences(): void
    {
        CalendarEvent::create([
            'title' => 'Daily Focus',
            'description' => null,
            'location' => null,
            'color' => '#2563eb',
            'is_all_day' => false,
            'timezone' => 'UTC',
            'starts_at' => Carbon::parse('2024-01-01 09:00:00', 'UTC'),
            'ends_at' => Carbon::parse('2024-01-01 10:00:00', 'UTC'),
            'rrule' => 'FREQ=DAILY',
            'recurrence_ends_at' => Carbon::parse('2024-01-05 23:59:59', 'UTC'),
        ]);

        $response = $this->getJson('/api/calendar/events?start=2024-01-01&end=2024-01-10');

        $response->assertOk();

        $occurrences = collect($response->json('data'))->where('title', 'Daily Focus');

        $this->assertCount(1, $occurrences);
        $this->assertSame('2024-01-01T09:00:00+00:00', $occurrences->first()['start']);
    }

    public function test_biweekly_rrule_honors_interval_and_days(): void
    {
        CalendarEvent::create([
            'title' => 'Design Critique',
            'description' => null,
            'location' => null,
            'color' => '#a855f7',
            'is_all_day' => false,
            'timezone' => 'UTC',
            'starts_at' => Carbon::parse('2024-01-02 13:00:00', 'UTC'),
            'ends_at' => Carbon::parse('2024-01-02 14:00:00', 'UTC'),
            'rrule' => 'FREQ=WEEKLY;INTERVAL=2;BYDAY=TU,TH',
            'recurrence_ends_at' => Carbon::parse('2024-02-02 23:59:59', 'UTC'),
        ]);

        $response = $this->getJson('/api/calendar/events?start=2024-01-01&end=2024-02-29');

        $response->assertOk();

        $occurrences = collect($response->json('data'))->where('title', 'Design Critique');

        $this->assertCount(1, $occurrences);
        $this->assertSame('2024-01-02T13:00:00+00:00', $occurrences->first()['start']);
    }

    public function test_monthly_rrule_supports_bysetpos_and_interval(): void
    {
        CalendarEvent::create([
            'title' => 'Quarterly Board Review',
            'description' => null,
            'location' => null,
            'color' => '#ec4899',
            'is_all_day' => false,
            'timezone' => 'UTC',
            'starts_at' => Carbon::parse('2024-01-11 11:00:00', 'UTC'),
            'ends_at' => Carbon::parse('2024-01-11 13:00:00', 'UTC'),
            'rrule' => 'FREQ=MONTHLY;INTERVAL=3;BYDAY=TH;BYSETPOS=2',
            'recurrence_ends_at' => Carbon::parse('2024-07-31 23:59:59', 'UTC'),
        ]);

        $response = $this->getJson('/api/calendar/events?start=2024-01-01&end=2024-07-31');

        $response->assertOk();

        $occurrences = collect($response->json('data'))->where('title', 'Quarterly Board Review');

        $this->assertCount(1, $occurrences);
        $this->assertSame('2024-01-11T11:00:00+00:00', $occurrences->first()['start']);
}
}
