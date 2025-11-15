<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCalendarEventRequest;
use App\Http\Requests\UpdateCalendarEventRequest;
use App\Models\CalendarEvent;
use Carbon\Carbon;
use Carbon\CarbonInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class CalendarEventController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        $rangeStart = $this->resolveRangeBoundary($request->query('start'), now()->startOfMonth()->subMonth());
        $rangeEnd = $this->resolveRangeBoundary($request->query('end'), now()->endOfMonth()->addMonth());

        $events = CalendarEvent::orderBy('starts_at')
            ->get()
            ->flatMap(fn (CalendarEvent $event) => $event->toCalendarOccurrences($rangeStart, $rangeEnd))
            ->values();

        return response()->json(['data' => $events]);
    }

    public function store(StoreCalendarEventRequest $request): JsonResponse
    {
        $event = CalendarEvent::create($this->buildAttributes($request->validated()));

        return response()->json([
            'data' => $event->formatOccurrence($event->starts_at, $event->ends_at),
        ], 201);
    }

    public function show(CalendarEvent $calendarEvent): JsonResponse
    {
        $timezone = $calendarEvent->timezone ?? config('app.timezone');

        return response()->json([
            'data' => [
                'id' => $calendarEvent->id,
                'title' => $calendarEvent->title,
                'description' => $calendarEvent->description,
                'location' => $calendarEvent->location,
                'color' => $calendarEvent->color,
                'all_day' => $calendarEvent->is_all_day,
                'start_date' => $calendarEvent->starts_at->clone()->setTimezone($timezone)->toDateString(),
                'start_time' => $calendarEvent->is_all_day ? null : $calendarEvent->starts_at->clone()->setTimezone($timezone)->format('H:i'),
                'end_date' => ($calendarEvent->ends_at ?? $calendarEvent->starts_at)->clone()->setTimezone($timezone)->toDateString(),
                'end_time' => $calendarEvent->is_all_day ? null : ($calendarEvent->ends_at ?? $calendarEvent->starts_at)->clone()->setTimezone($timezone)->format('H:i'),
                'rrule' => $calendarEvent->rrule,
                'recurrence_ends_at' => $calendarEvent->recurrence_ends_at?->clone()->setTimezone($timezone)->toDateString(),
                'timezone' => $timezone,
            ],
        ]);
    }

    public function update(UpdateCalendarEventRequest $request, CalendarEvent $calendarEvent): JsonResponse
    {
        $calendarEvent->update($this->buildAttributes($request->validated()));

        return response()->json([
            'data' => $calendarEvent->formatOccurrence($calendarEvent->starts_at, $calendarEvent->ends_at),
        ]);
    }

    public function destroy(CalendarEvent $calendarEvent): Response
    {
        $calendarEvent->delete();

        return response()->noContent();
    }

    protected function resolveRangeBoundary(?string $value, CarbonInterface $default): CarbonInterface
    {
        return $value ? Carbon::parse($value) : $default;
    }

    protected function buildAttributes(array $data): array
    {
        $timezone = $data['timezone'] ?? config('app.timezone');
        $allDay = (bool) $data['all_day'];

        return [
            'title' => $data['title'],
            'description' => $data['description'] ?? null,
            'location' => $data['location'] ?? null,
            'color' => $data['color'] ?? '#2563eb',
            'is_all_day' => $allDay,
            'timezone' => $timezone,
            'starts_at' => $this->combineDateAndTime($data['start_date'], $data['start_time'] ?? null, $timezone, false, $allDay),
            'ends_at' => $this->combineDateAndTime($data['end_date'], $data['end_time'] ?? null, $timezone, true, $allDay),
            'rrule' => $this->normalizeRule($data['rrule'] ?? null),
            'recurrence_ends_at' => isset($data['recurrence_ends_at']) && $data['recurrence_ends_at']
                ? Carbon::parse($data['recurrence_ends_at'], $timezone)->endOfDay()
                : null,
        ];
    }

    protected function combineDateAndTime(string $date, ?string $time, string $timezone, bool $isEnd, bool $allDay): CarbonInterface
    {
        if ($allDay || empty($time)) {
            return $isEnd
                ? Carbon::parse($date, $timezone)->endOfDay()
                : Carbon::parse($date, $timezone)->startOfDay();
        }

        return Carbon::parse(sprintf('%s %s', $date, $time), $timezone);
    }

    protected function normalizeRule(?string $rule): ?string
    {
        if (! $rule) {
            return null;
        }

        $normalized = strtoupper(trim(Str::replaceFirst('RRULE:', '', $rule)));

        return $normalized !== '' ? $normalized : null;
    }
}
