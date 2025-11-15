<?php

namespace Tests\Unit;

use App\Models\CalendarEvent;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CalendarEventModelTest extends TestCase
{
    use RefreshDatabase;

    public function test_format_occurrence_correctly_formats_all_day_events(): void
    {
        $event = CalendarEvent::factory()->create([
            'title' => 'All Day Conference',
            'description' => 'Annual meetup',
            'location' => 'Convention Center',
            'color' => '#3b82f6',
            'is_all_day' => true,
            'timezone' => 'UTC',
            'starts_at' => Carbon::parse('2024-03-15 00:00:00', 'UTC'),
            'ends_at' => Carbon::parse('2024-03-17 23:59:59', 'UTC'),
            'rrule' => null,
        ]);

        $result = $event->formatOccurrence($event->starts_at, $event->ends_at);

        $this->assertSame((string) $event->id, $result['id']);
        $this->assertSame('All Day Conference', $result['title']);
        $this->assertSame('2024-03-15T00:00:00+00:00', $result['start']);
        $this->assertSame('2024-03-18T00:00:00+00:00', $result['end']);
        $this->assertTrue($result['allDay']);
        $this->assertSame('#3b82f6', $result['backgroundColor']);
        $this->assertSame('#3b82f6', $result['borderColor']);
        $this->assertSame('Annual meetup', $result['extendedProps']['description']);
        $this->assertSame('Convention Center', $result['extendedProps']['location']);
        $this->assertSame($event->id, $result['extendedProps']['event_id']);
        $this->assertFalse($result['extendedProps']['is_recurring']);
        $this->assertNull($result['extendedProps']['rrule']);
        $this->assertSame('UTC', $result['extendedProps']['timezone']);
    }

    public function test_format_occurrence_correctly_formats_timed_events(): void
    {
        $event = CalendarEvent::factory()->create([
            'title' => 'Team Standup',
            'description' => 'Daily sync',
            'location' => 'Zoom',
            'color' => '#10b981',
            'is_all_day' => false,
            'timezone' => 'America/New_York',
            'starts_at' => Carbon::parse('2024-03-15 09:00:00', 'America/New_York'),
            'ends_at' => Carbon::parse('2024-03-15 09:30:00', 'America/New_York'),
            'rrule' => 'FREQ=DAILY;INTERVAL=1',
        ]);

        $result = $event->formatOccurrence($event->starts_at, $event->ends_at);

        $this->assertSame((string) $event->id, $result['id']);
        $this->assertSame('Team Standup', $result['title']);
        $this->assertSame($event->starts_at->toIso8601String(), $result['start']);
        $this->assertSame($event->ends_at->toIso8601String(), $result['end']);
        $this->assertFalse($result['allDay']);
        $this->assertSame('#10b981', $result['backgroundColor']);
        $this->assertSame('#10b981', $result['borderColor']);
        $this->assertSame('Daily sync', $result['extendedProps']['description']);
        $this->assertSame('Zoom', $result['extendedProps']['location']);
        $this->assertSame($event->id, $result['extendedProps']['event_id']);
        $this->assertTrue($result['extendedProps']['is_recurring']);
        $this->assertSame('FREQ=DAILY;INTERVAL=1', $result['extendedProps']['rrule']);
        $this->assertSame('America/New_York', $result['extendedProps']['timezone']);
    }

    public function test_format_occurrence_adds_day_to_all_day_event_end_date(): void
    {
        $event = CalendarEvent::factory()->create([
            'is_all_day' => true,
            'starts_at' => Carbon::parse('2024-03-15 00:00:00', 'UTC'),
            'ends_at' => Carbon::parse('2024-03-15 23:59:59', 'UTC'),
        ]);

        $result = $event->formatOccurrence($event->starts_at, $event->ends_at);

        $this->assertSame('2024-03-15T00:00:00+00:00', $result['start']);
        $this->assertSame('2024-03-16T00:00:00+00:00', $result['end']);
    }

    public function test_format_occurrence_does_not_modify_timed_event_end_date(): void
    {
        $event = CalendarEvent::factory()->create([
            'is_all_day' => false,
            'starts_at' => Carbon::parse('2024-03-15 14:00:00', 'UTC'),
            'ends_at' => Carbon::parse('2024-03-15 15:30:00', 'UTC'),
        ]);

        $result = $event->formatOccurrence($event->starts_at, $event->ends_at);

        $this->assertSame('2024-03-15T14:00:00+00:00', $result['start']);
        $this->assertSame('2024-03-15T15:30:00+00:00', $result['end']);
    }

    public function test_format_occurrence_uses_custom_occurrence_key_for_recurring_events(): void
    {
        $event = CalendarEvent::factory()->create([
            'title' => 'Weekly Meeting',
            'rrule' => 'FREQ=WEEKLY',
        ]);

        $occurrenceStart = Carbon::parse('2024-03-18 10:00:00', 'UTC');
        $occurrenceKey = $occurrenceStart->format('YmdHis');

        $result = $event->formatOccurrence($occurrenceStart, null, $occurrenceKey);

        $this->assertSame("{$event->id}-{$occurrenceKey}", $result['id']);
    }

    public function test_format_occurrence_uses_starts_at_as_default_end_when_end_is_null(): void
    {
        $event = CalendarEvent::factory()->create([
            'is_all_day' => false,
            'starts_at' => Carbon::parse('2024-03-15 10:00:00', 'UTC'),
            'ends_at' => null,
        ]);

        $result = $event->formatOccurrence($event->starts_at, null);

        $this->assertSame('2024-03-15T10:00:00+00:00', $result['start']);
        $this->assertSame('2024-03-15T10:00:00+00:00', $result['end']);
    }
}
