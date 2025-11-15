<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCalendarEventRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'location' => ['nullable', 'string', 'max:255'],
            'start_date' => ['required', 'date'],
            'end_date' => ['required', 'date', 'after_or_equal:start_date'],
            'start_time' => ['nullable', 'date_format:H:i', 'required_if:all_day,false'],
            'end_time' => ['nullable', 'date_format:H:i', 'required_if:all_day,false'],
            'all_day' => ['required', 'boolean'],
            'color' => ['nullable', 'string', 'max:50'],
            'rrule' => ['nullable', 'string', 'max:255'],
            'recurrence_ends_at' => ['nullable', 'date', 'after_or_equal:start_date'],
            'timezone' => ['nullable', 'timezone'],
        ];
    }

    public function prepareForValidation(): void
    {
        $this->merge([
            'all_day' => filter_var($this->input('all_day'), FILTER_VALIDATE_BOOL, FILTER_NULL_ON_FAILURE) ?? false,
        ]);
    }
}
