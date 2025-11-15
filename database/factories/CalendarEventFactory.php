<?php

namespace Database\Factories;

use App\Models\CalendarEvent;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<CalendarEvent>
 */
class CalendarEventFactory extends Factory
{
    protected $model = CalendarEvent::class;

    public function definition(): array
    {
        $start = Carbon::now()->addDays($this->faker->numberBetween(-10, 10))->setTime($this->faker->numberBetween(8, 15), 0);
        $end = (clone $start)->addHours(2);

        return [
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(),
            'location' => $this->faker->city(),
            'color' => '#2563eb',
            'is_all_day' => false,
            'timezone' => config('app.timezone'),
            'starts_at' => $start,
            'ends_at' => $end,
        ];
    }
}
