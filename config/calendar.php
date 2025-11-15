<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Calendar Locale
    |--------------------------------------------------------------------------
    |
    | This option controls the locale used for date formatting in the calendar
    | feature. Supported values include 'en-US' (MM/DD/YYYY) and 'en-GB'
    | (DD/MM/YYYY). The architecture is extensible to support additional
    | locales as needed.
    |
    */

    'locale' => env('CALENDAR_LOCALE', 'en-US'),

    /*
    |--------------------------------------------------------------------------
    | Calendar Timezone
    |--------------------------------------------------------------------------
    |
    | This option allows you to override the application's default timezone
    | specifically for calendar events. If not set, the application's default
    | timezone will be used.
    |
    */

    'timezone' => env('CALENDAR_TIMEZONE', config('app.timezone')),

];
