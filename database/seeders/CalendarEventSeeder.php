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
        $startDate = Carbon::now()->setTimezone($timezone)->startOfWeek(Carbon::MONDAY);

        if ($startDate->lt(Carbon::now($timezone)->startOfDay())) {
            $startDate->addWeek();
        }

        $subjects = [
            'English',
            'Mathematics',
            'Science',
            'History',
            'Geography',
            'Art',
            'Music',
            'Physical Education',
            'Computing',
            'Religious Education',
            'PSHE',
            'Design Technology',
            'Modern Languages',
            'Reading Workshop',
        ];

        $colors = [
            '#2563eb',
            '#f97316',
            '#10b981',
            '#a855f7',
            '#ec4899',
            '#facc15',
            '#0ea5e9',
        ];

        $dailySessions = [
            ['start' => '09:15', 'end' => '10:15', 'type' => 'lesson'],
            ['start' => '10:30', 'end' => '11:30', 'type' => 'lesson'],
            ['start' => '11:30', 'end' => '12:00', 'type' => 'lesson'],
            ['start' => '13:00', 'end' => '14:00', 'type' => 'lesson'],
            ['start' => '14:00', 'end' => '15:00', 'type' => 'lesson'],
        ];

        $specialSessions = [
            ['start' => '08:00', 'end' => '08:45', 'title' => 'Breakfast Club', 'location' => 'Dining Hall', 'color' => '#cbd5e1', 'description' => 'Optional breakfast and morning activities.'],
            ['start' => '09:00', 'end' => '09:15', 'title' => 'Registration', 'location' => 'Classroom', 'color' => '#94a3b8', 'description' => 'Morning register and assembly.'],
            ['start' => '10:15', 'end' => '10:30', 'title' => 'Morning Break', 'location' => 'Playground', 'color' => '#94a3b8', 'description' => 'Morning playtime and refreshments.'],
            ['start' => '15:15', 'end' => '18:00', 'title' => 'After-school Club', 'location' => 'Activity Hall', 'color' => '#cbd5e1', 'description' => 'Optional after-school activities and care.'],
        ];

        $subjectIndex = 0;
        $colorCount = count($colors);
        $subjectCount = count($subjects);

        for ($week = 0; $week < 2; $week++) {
            for ($day = 0; $day < 5; $day++) {
                $currentDate = $startDate->copy()->addWeeks($week)->addDays($day);

                foreach ($dailySessions as $sessionIndex => $session) {
                    $subject = $subjects[$subjectIndex % $subjectCount];
                    $color = $colors[$subjectIndex % $colorCount];
                    $subjectIndex++;

                    $startsAt = $currentDate->copy()->setTimeFromTimeString($session['start']);
                    $endsAt = $currentDate->copy()->setTimeFromTimeString($session['end']);

                    CalendarEvent::create([
                        'title' => sprintf('%s Lesson', $subject),
                        'description' => sprintf('Curriculum focus on %s.', $subject),
                        'location' => sprintf('Classroom %s', chr(65 + (($day + $sessionIndex) % 4))),
                        'color' => $color,
                        'is_all_day' => false,
                        'timezone' => $timezone,
                        'starts_at' => $startsAt,
                        'ends_at' => $endsAt,
                    ]);
                }

                foreach ($specialSessions as $special) {
                    $startsAt = $currentDate->copy()->setTimeFromTimeString($special['start']);
                    $endsAt = $currentDate->copy()->setTimeFromTimeString($special['end']);

                    CalendarEvent::create([
                        'title' => $special['title'],
                        'description' => $special['description'],
                        'location' => $special['location'],
                        'color' => $special['color'],
                        'is_all_day' => false,
                        'timezone' => $timezone,
                        'starts_at' => $startsAt,
                        'ends_at' => $endsAt,
                    ]);
                }

                CalendarEvent::create([
                    'title' => 'Lunch Break',
                    'description' => 'Midday break for pupils and staff.',
                    'location' => 'Dining Hall',
                    'color' => '#94a3b8',
                    'is_all_day' => false,
                    'timezone' => $timezone,
                    'starts_at' => $currentDate->copy()->setTime(12, 0),
                    'ends_at' => $currentDate->copy()->setTime(13, 0),
                ]);
            }
        }

        $tripDate = $startDate->copy()->addWeek()->addDays(2);

        CalendarEvent::create([
            'title' => 'Educational Visit Day',
            'description' => 'Full-day enrichment activity for pupils.',
            'location' => 'Off-site Venue',
            'color' => '#fb7185',
            'is_all_day' => true,
            'timezone' => $timezone,
            'starts_at' => $tripDate->copy()->startOfDay(),
            'ends_at' => $tripDate->copy()->endOfDay(),
        ]);
    }
}
