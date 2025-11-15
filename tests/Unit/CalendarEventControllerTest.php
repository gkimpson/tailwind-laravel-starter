<?php

namespace Tests\Unit;

use App\Http\Controllers\Api\CalendarEventController;
use Carbon\Carbon;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

class CalendarEventControllerTest extends TestCase
{
    protected function invokeProtectedMethod(object $object, string $methodName, array $parameters = []): mixed
    {
        $reflection = new ReflectionClass($object);
        $method = $reflection->getMethod($methodName);
        $method->setAccessible(true);

        return $method->invokeArgs($object, $parameters);
    }

    public function test_combine_date_and_time_handles_all_day_event_start_boundary(): void
    {
        $controller = new CalendarEventController;

        $result = $this->invokeProtectedMethod(
            $controller,
            'combineDateAndTime',
            ['2024-03-15', null, 'America/New_York', false, true]
        );

        $this->assertInstanceOf(Carbon::class, $result);
        $this->assertSame('2024-03-15 00:00:00', $result->format('Y-m-d H:i:s'));
        $this->assertSame('America/New_York', $result->timezone->getName());
    }

    public function test_combine_date_and_time_handles_all_day_event_end_boundary(): void
    {
        $controller = new CalendarEventController;

        $result = $this->invokeProtectedMethod(
            $controller,
            'combineDateAndTime',
            ['2024-03-15', null, 'America/New_York', true, true]
        );

        $this->assertInstanceOf(Carbon::class, $result);
        $this->assertSame('2024-03-15 23:59:59', $result->format('Y-m-d H:i:s'));
        $this->assertSame('America/New_York', $result->timezone->getName());
    }

    public function test_combine_date_and_time_handles_timed_event_with_specific_time(): void
    {
        $controller = new CalendarEventController;

        $result = $this->invokeProtectedMethod(
            $controller,
            'combineDateAndTime',
            ['2024-03-15', '14:30', 'UTC', false, false]
        );

        $this->assertInstanceOf(Carbon::class, $result);
        $this->assertSame('2024-03-15 14:30:00', $result->format('Y-m-d H:i:s'));
        $this->assertSame('UTC', $result->timezone->getName());
    }

    public function test_combine_date_and_time_respects_different_timezones(): void
    {
        $controller = new CalendarEventController;

        $resultUTC = $this->invokeProtectedMethod(
            $controller,
            'combineDateAndTime',
            ['2024-03-15', '10:00', 'UTC', false, false]
        );

        $resultEST = $this->invokeProtectedMethod(
            $controller,
            'combineDateAndTime',
            ['2024-03-15', '10:00', 'America/New_York', false, false]
        );

        $this->assertSame('UTC', $resultUTC->timezone->getName());
        $this->assertSame('America/New_York', $resultEST->timezone->getName());
        $this->assertNotEquals($resultUTC->timestamp, $resultEST->timestamp);
    }

    public function test_normalize_rule_correctly_processes_rrule_strings(): void
    {
        $controller = new CalendarEventController;

        $result = $this->invokeProtectedMethod(
            $controller,
            'normalizeRule',
            ['RRULE:FREQ=DAILY;INTERVAL=1']
        );

        $this->assertSame('FREQ=DAILY;INTERVAL=1', $result);
    }

    public function test_normalize_rule_removes_rrule_prefix_case_insensitively(): void
    {
        $controller = new CalendarEventController;

        $result = $this->invokeProtectedMethod(
            $controller,
            'normalizeRule',
            ['rrule:FREQ=WEEKLY;BYDAY=MO,WE']
        );

        $this->assertSame('FREQ=WEEKLY;BYDAY=MO,WE', $result);
    }

    public function test_normalize_rule_uppercases_rule_string(): void
    {
        $controller = new CalendarEventController;

        $result = $this->invokeProtectedMethod(
            $controller,
            'normalizeRule',
            ['freq=monthly;interval=3']
        );

        $this->assertSame('FREQ=MONTHLY;INTERVAL=3', $result);
    }

    public function test_normalize_rule_trims_whitespace(): void
    {
        $controller = new CalendarEventController;

        $result = $this->invokeProtectedMethod(
            $controller,
            'normalizeRule',
            ['  FREQ=DAILY;COUNT=5  ']
        );

        $this->assertSame('FREQ=DAILY;COUNT=5', $result);
    }

    public function test_normalize_rule_returns_null_for_null_input(): void
    {
        $controller = new CalendarEventController;

        $result = $this->invokeProtectedMethod(
            $controller,
            'normalizeRule',
            [null]
        );

        $this->assertNull($result);
    }

    public function test_normalize_rule_returns_null_for_empty_string(): void
    {
        $controller = new CalendarEventController;

        $result = $this->invokeProtectedMethod(
            $controller,
            'normalizeRule',
            ['']
        );

        $this->assertNull($result);
    }

    public function test_normalize_rule_returns_null_for_whitespace_only(): void
    {
        $controller = new CalendarEventController;

        $result = $this->invokeProtectedMethod(
            $controller,
            'normalizeRule',
            ['   ']
        );

        $this->assertNull($result);
    }

    public function test_normalize_rule_handles_rrule_prefix_only(): void
    {
        $controller = new CalendarEventController;

        $result = $this->invokeProtectedMethod(
            $controller,
            'normalizeRule',
            ['RRULE:']
        );

        $this->assertNull($result);
    }
}
