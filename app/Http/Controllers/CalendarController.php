<?php

namespace App\Http\Controllers;

class CalendarController extends Controller
{
    public function index()
    {
        $locale = config('calendar.locale');

        // Map locale to datepicker format
        $datepickerFormat = match ($locale) {
            'en-GB' => 'dd/mm/yyyy',
            'en-US' => 'mm/dd/yyyy',
            default => 'mm/dd/yyyy',
        };

        return view('calendar', [
            'calendarLocale' => $locale,
            'datepickerFormat' => $datepickerFormat,
        ]);
    }
}
