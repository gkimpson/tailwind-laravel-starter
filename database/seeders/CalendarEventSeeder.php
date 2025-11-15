<?php

namespace Database\Seeders;

use App\Models\CalendarEvent;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CalendarEventSeeder extends Seeder
{
    public function run(): void
    {
        $timezone = config('app.timezone');
        $now = Carbon::now()->setTimezone($timezone);

        CalendarEvent::factory()->create([
            'title' => 'Strategy Sync',
            'description' => 'Monthly sync between marketing and product.',
            'location' => 'Conference Room A',
            'color' => '#2563eb',
            'starts_at' => $now->copy()->startOfMonth()->setTime(10, 0),
            'ends_at' => $now->copy()->startOfMonth()->setTime(11, 0),
        ]);

        CalendarEvent::create([
            'title' => 'Engineering Standup',
            'description' => 'Daily standup for the platform team.',
            'location' => 'Main bullpen',
            'color' => '#10b981',
            'is_all_day' => false,
            'timezone' => $timezone,
            'starts_at' => $now->copy()->startOfWeek()->setTime(9, 0),
            'ends_at' => $now->copy()->startOfWeek()->setTime(9, 30),
            'rrule' => 'FREQ=WEEKLY;INTERVAL=1;BYDAY=MO,TU,WE,TH,FR',
            'recurrence_ends_at' => $now->copy()->addMonths(2),
        ]);

        CalendarEvent::create([
            'title' => 'Product Launch Planning',
            'description' => 'Touchpoint to check launch blockers and owners.',
            'location' => 'Zoom',
            'color' => '#f97316',
            'is_all_day' => false,
            'timezone' => $timezone,
            'starts_at' => $now->copy()->startOfMonth()->setTime(15, 0),
            'ends_at' => $now->copy()->startOfMonth()->setTime(17, 0),
            'rrule' => 'FREQ=MONTHLY;INTERVAL=1;BYMONTHDAY=15',
            'recurrence_ends_at' => $now->copy()->addMonths(4),
        ]);

        CalendarEvent::create([
            'title' => 'Design Critique',
            'description' => 'Bi-weekly design review on Tuesday/Thursday.',
            'location' => 'Hybrid',
            'color' => '#a855f7',
            'is_all_day' => false,
            'timezone' => $timezone,
            'starts_at' => $now->copy()->next(Carbon::TUESDAY)->setTime(13, 0),
            'ends_at' => $now->copy()->next(Carbon::TUESDAY)->setTime(14, 0),
            'rrule' => 'FREQ=WEEKLY;INTERVAL=2;BYDAY=TU,TH',
            'recurrence_ends_at' => $now->copy()->addMonths(3),
        ]);

        CalendarEvent::create([
            'title' => 'Quarterly Board Review',
            'description' => 'Second Thursday of every quarter.',
            'location' => 'Executive Conference Room',
            'color' => '#ec4899',
            'is_all_day' => false,
            'timezone' => $timezone,
            'starts_at' => $now->copy()->firstOfQuarter()->next(Carbon::THURSDAY)->addWeek()->setTime(11, 0),
            'ends_at' => $now->copy()->firstOfQuarter()->next(Carbon::THURSDAY)->addWeek()->setTime(13, 0),
            'rrule' => 'FREQ=MONTHLY;INTERVAL=3;BYDAY=TH;BYSETPOS=2',
            'recurrence_ends_at' => $now->copy()->addYear(),
        ]);
    }
}
