<?php

use App\Http\Controllers\Api\CalendarEventController;
use Illuminate\Support\Facades\Route;

Route::prefix('calendar')->group(function () {
    Route::get('events', [CalendarEventController::class, 'index']);
    Route::post('events', [CalendarEventController::class, 'store']);
    Route::get('events/{calendarEvent}', [CalendarEventController::class, 'show']);
    Route::put('events/{calendarEvent}', [CalendarEventController::class, 'update']);
    Route::delete('events/{calendarEvent}', [CalendarEventController::class, 'destroy']);
});
