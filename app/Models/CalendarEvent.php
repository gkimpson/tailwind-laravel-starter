<?php

namespace App\Models;

use Carbon\Carbon;
use Carbon\CarbonInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Recurr\Exception\InvalidRRule;
use Recurr\Recurrence;
use Recurr\Rule;
use Recurr\Transformer\ArrayTransformer;
use Recurr\Transformer\ArrayTransformerConfig;
use Recurr\Transformer\Constraint\BetweenConstraint;

class CalendarEvent extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'location',
        'color',
        'is_all_day',
        'timezone',
        'starts_at',
        'ends_at',
        'rrule',
        'recurrence_ends_at',
    ];

    protected $casts = [
        'starts_at' => 'datetime',
        'ends_at' => 'datetime',
        'recurrence_ends_at' => 'datetime',
        'is_all_day' => 'boolean',
    ];

    public function isRecurring(): bool
    {
        return ! empty($this->rrule);
    }

    public function toCalendarOccurrences(CarbonInterface $rangeStart, CarbonInterface $rangeEnd): Collection
    {
        if ($this->isRecurring()) {
            return $this->buildRecurringOccurrences($rangeStart, $rangeEnd);
        }

        if ($this->occursWithin($rangeStart, $rangeEnd)) {
            return collect([$this->formatOccurrence($this->starts_at, $this->ends_at)]);
        }

        return collect();
    }

    public function formatOccurrence(CarbonInterface $start, ?CarbonInterface $end = null, ?string $occurrenceKey = null): array
    {
        $endInstance = $end ?? $this->ends_at ?? $start;

        $endValue = $endInstance;

        if ($this->is_all_day && $endInstance) {
            $endValue = $endInstance->copy()->addDay()->startOfDay();
        }

        return [
            'id' => $occurrenceKey ? sprintf('%s-%s', $this->id, $occurrenceKey) : (string) $this->id,
            'title' => $this->title,
            'start' => $start->toIso8601String(),
            'end' => $endValue?->toIso8601String(),
            'allDay' => $this->is_all_day,
            'backgroundColor' => $this->color,
            'borderColor' => $this->color,
            'extendedProps' => [
                'description' => $this->description,
                'location' => $this->location,
                'event_id' => $this->id,
                'is_recurring' => $this->isRecurring(),
                'rrule' => $this->rrule,
                'timezone' => $this->timezone,
            ],
        ];
    }

    protected function occursWithin(CarbonInterface $rangeStart, CarbonInterface $rangeEnd): bool
    {
        $eventEnd = $this->ends_at ?? $this->starts_at;

        return
            $this->isWithinRange($this->starts_at, $rangeStart, $rangeEnd) ||
            $this->isWithinRange($eventEnd, $rangeStart, $rangeEnd) ||
            ($this->starts_at->lte($rangeStart) && $eventEnd->gte($rangeEnd));
    }

    protected function buildRecurringOccurrences(CarbonInterface $rangeStart, CarbonInterface $rangeEnd): Collection
    {
        $rule = $this->toRecurrRule();

        if (! $rule) {
            return collect();
        }

        $timezone = $this->timezone ?? config('app.timezone');

        $config = (new ArrayTransformerConfig)
            ->setVirtualLimit(2000)
            ->enableLastDayOfMonthFix();

        $transformer = new ArrayTransformer($config);

        try {
            $occurrences = $transformer->transform(
                $rule,
                new BetweenConstraint(
                    $rangeStart->copy()->setTimezone($timezone)->toDateTime(),
                    $rangeEnd->copy()->setTimezone($timezone)->toDateTime(),
                    true
                )
            );
        } catch (\Throwable $exception) {
            report($exception);

            return collect();
        }

        return collect($occurrences)
            ->take(1)
            ->map(function (Recurrence $occurrence) {
                $start = Carbon::instance($occurrence->getStart());
                $endDate = $occurrence->getEnd();
                $end = $endDate ? Carbon::instance($endDate) : null;

                return $this->formatOccurrence($start, $end, $start->format('YmdHis'));
            });
    }

    protected function toRecurrRule(): ?Rule
    {
        if (! $this->rrule) {
            return null;
        }

        $timezone = $this->timezone ?? config('app.timezone');

        try {
            $rule = new Rule(
                $this->rrule,
                $this->starts_at->copy()->setTimezone($timezone)->toDateTime(),
                $this->ends_at?->copy()->setTimezone($timezone)->toDateTime(),
                $timezone
            );
        } catch (InvalidRRule) {
            return null;
        }

        if ($this->recurrence_ends_at) {
            $rule->setUntil($this->recurrence_ends_at->copy()->setTimezone($timezone)->toDateTime());
        }

        return $rule;
    }

    protected function isWithinRange(CarbonInterface $candidate, CarbonInterface $start, CarbonInterface $end): bool
    {
        return $candidate->greaterThanOrEqualTo($start) && $candidate->lessThanOrEqualTo($end);
    }
}
