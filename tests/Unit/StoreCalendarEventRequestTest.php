<?php

namespace Tests\Unit;

use App\Http\Requests\StoreCalendarEventRequest;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Validator;
use Tests\TestCase;

class StoreCalendarEventRequestTest extends TestCase
{
    use RefreshDatabase;

    protected function validateRequest(array $data): \Illuminate\Validation\Validator
    {
        $request = new StoreCalendarEventRequest;

        $requestData = new StoreCalendarEventRequest;
        $requestData->merge($data);
        $requestData->prepareForValidation();

        return Validator::make($requestData->all(), $request->rules());
    }

    public function test_start_time_is_required_when_all_day_is_false(): void
    {
        $data = [
            'title' => 'Team Meeting',
            'start_date' => '2024-03-15',
            'end_date' => '2024-03-15',
            'end_time' => '10:00',
            'all_day' => false,
        ];

        $validator = $this->validateRequest($data);

        $this->assertTrue($validator->fails());
        $this->assertArrayHasKey('start_time', $validator->errors()->toArray());
    }

    public function test_end_time_is_required_when_all_day_is_false(): void
    {
        $data = [
            'title' => 'Team Meeting',
            'start_date' => '2024-03-15',
            'end_date' => '2024-03-15',
            'start_time' => '09:00',
            'all_day' => false,
        ];

        $validator = $this->validateRequest($data);

        $this->assertTrue($validator->fails());
        $this->assertArrayHasKey('end_time', $validator->errors()->toArray());
    }

    public function test_start_time_and_end_time_are_not_required_when_all_day_is_true(): void
    {
        $data = [
            'title' => 'Conference',
            'start_date' => '2024-03-15',
            'end_date' => '2024-03-17',
            'all_day' => true,
        ];

        $validator = $this->validateRequest($data);

        $this->assertFalse($validator->fails());
    }

    public function test_start_time_must_be_valid_time_format(): void
    {
        $data = [
            'title' => 'Team Meeting',
            'start_date' => '2024-03-15',
            'end_date' => '2024-03-15',
            'start_time' => 'invalid-time',
            'end_time' => '10:00',
            'all_day' => false,
        ];

        $validator = $this->validateRequest($data);

        $this->assertTrue($validator->fails());
        $this->assertArrayHasKey('start_time', $validator->errors()->toArray());
    }

    public function test_end_time_must_be_valid_time_format(): void
    {
        $data = [
            'title' => 'Team Meeting',
            'start_date' => '2024-03-15',
            'end_date' => '2024-03-15',
            'start_time' => '09:00',
            'end_time' => '25:00',
            'all_day' => false,
        ];

        $validator = $this->validateRequest($data);

        $this->assertTrue($validator->fails());
        $this->assertArrayHasKey('end_time', $validator->errors()->toArray());
    }

    public function test_valid_timed_event_passes_validation(): void
    {
        $data = [
            'title' => 'Team Meeting',
            'start_date' => '2024-03-15',
            'end_date' => '2024-03-15',
            'start_time' => '09:00',
            'end_time' => '10:30',
            'all_day' => false,
        ];

        $validator = $this->validateRequest($data);

        $this->assertFalse($validator->fails());
    }

    public function test_time_format_accepts_24_hour_format(): void
    {
        $data = [
            'title' => 'Late Meeting',
            'start_date' => '2024-03-15',
            'end_date' => '2024-03-15',
            'start_time' => '23:45',
            'end_time' => '23:59',
            'all_day' => false,
        ];

        $validator = $this->validateRequest($data);

        $this->assertFalse($validator->fails());
    }

    public function test_prepare_for_validation_normalizes_all_day_to_boolean(): void
    {
        $request = new StoreCalendarEventRequest;
        $request->merge(['all_day' => 'true']);
        $request->prepareForValidation();

        $this->assertTrue($request->input('all_day'));

        $request = new StoreCalendarEventRequest;
        $request->merge(['all_day' => 'false']);
        $request->prepareForValidation();

        $this->assertFalse($request->input('all_day'));

        $request = new StoreCalendarEventRequest;
        $request->merge(['all_day' => '1']);
        $request->prepareForValidation();

        $this->assertTrue($request->input('all_day'));

        $request = new StoreCalendarEventRequest;
        $request->merge(['all_day' => '0']);
        $request->prepareForValidation();

        $this->assertFalse($request->input('all_day'));
    }

    public function test_title_is_required(): void
    {
        $data = [
            'start_date' => '2024-03-15',
            'end_date' => '2024-03-15',
            'all_day' => true,
        ];

        $validator = $this->validateRequest($data);

        $this->assertTrue($validator->fails());
        $this->assertArrayHasKey('title', $validator->errors()->toArray());
    }

    public function test_end_date_must_be_after_or_equal_to_start_date(): void
    {
        $data = [
            'title' => 'Invalid Event',
            'start_date' => '2024-03-15',
            'end_date' => '2024-03-14',
            'all_day' => true,
        ];

        $validator = $this->validateRequest($data);

        $this->assertTrue($validator->fails());
        $this->assertArrayHasKey('end_date', $validator->errors()->toArray());
    }

    public function test_recurrence_ends_at_must_be_after_or_equal_to_start_date(): void
    {
        $data = [
            'title' => 'Recurring Event',
            'start_date' => '2024-03-15',
            'end_date' => '2024-03-15',
            'all_day' => true,
            'rrule' => 'FREQ=DAILY',
            'recurrence_ends_at' => '2024-03-10',
        ];

        $validator = $this->validateRequest($data);

        $this->assertTrue($validator->fails());
        $this->assertArrayHasKey('recurrence_ends_at', $validator->errors()->toArray());
    }
}
