# Calendar Locale-Based Date Format Design

**Date:** 2025-11-15
**Feature:** Locale-based date format switching for calendar
**Approach:** Internationalization (i18n) using locale codes

## Overview

Add support for locale-specific date formatting in the calendar feature through a `CALENDAR_LOCALE` environment variable. Initially supporting US (en-US) and UK (en-GB) formats, with extensible architecture for additional locales.

## Requirements

- **Scope:** Calendar feature only (not application-wide)
- **Input/Output:** Both display and input parsing respect the locale setting
- **Extensibility:** Architecture supports adding new locales/formats easily
- **Current State:** Calendar uses yyyy-mm-dd format with browser locale defaults

## Architecture

### Single Source of Truth
- Environment variable: `CALENDAR_LOCALE` (default: `en-US`)
- Flows from backend config → frontend JavaScript
- Centralized in `config/calendar.php`

### Format Examples
- **en-US:** 06/19/2025 (MM/DD/YYYY)
- **en-GB:** 19/06/2025 (DD/MM/YYYY)

## Components

### Backend (Laravel)

**1. Configuration**
```php
// config/calendar.php
return [
    'locale' => env('CALENDAR_LOCALE', 'en-US'),
    'timezone' => env('CALENDAR_TIMEZONE', config('app.timezone')),
];
```

**2. Controller**
```php
// CalendarController::index()
return view('calendar', [
    'calendarLocale' => config('calendar.locale'),
]);
```

### Frontend (JavaScript)

**1. Date Formatter Module** (`resources/js/utils/dateFormatter.js`)
- Centralized date formatting using `Intl.DateTimeFormat`
- Functions: `formatDate()`, `formatDateTime()`, `parseDate()`, `getDatepickerFormat()`
- Locale-aware formatting

**2. Datepicker Configuration**
- Map locale codes to Flowbite datepicker format patterns
- en-US → `mm/dd/yyyy`
- en-GB → `dd/mm/yyyy`

**3. FullCalendar Integration**
- Set FullCalendar's locale option to match `CALENDAR_LOCALE`

## Data Flow

### Input (User → Database)
1. User enters date in locale format (MM/DD or DD/MM)
2. Datepicker outputs ISO: `YYYY-MM-DD`
3. API receives ISO format
4. Database stores ISO/Carbon format (unchanged)

### Output (Database → User)
1. API returns ISO format (unchanged)
2. JavaScript receives ISO dates
3. `dateFormatter.js` converts to locale format
4. User sees locale-specific display

## Error Handling

1. **Invalid Locale:** Falls back to `en-US`, logs warning
2. **Date Parsing:** Datepicker handles validation, prevents invalid dates
3. **Browser Compatibility:** `Intl.DateTimeFormat` supported in all modern browsers
4. **Timezone Independence:** Locale setting independent of timezone handling

## Testing

### Unit Tests
- Config returns correct locale value
- Fallback to default locale
- Invalid locale handling

### Feature Tests
- Calendar view receives locale variable
- API continues using ISO format
- Date validation with various formats

### Manual Testing
- Test en-US format display and input
- Test en-GB format display and input
- Verify event creation/editing with both locales
- Confirm existing events render correctly

## Implementation Files

**New Files:**
- `config/calendar.php`
- `resources/js/utils/dateFormatter.js`
- `tests/Unit/CalendarLocaleConfigTest.php`

**Modified Files:**
- `.env.example`
- `app/Http/Controllers/CalendarController.php`
- `resources/views/calendar.blade.php`
- `resources/js/calendar.js`
- Existing calendar feature tests

## Future Extensibility

Adding new locales requires:
1. Add locale code to datepicker format mapping in `dateFormatter.js`
2. Test with new locale setting
3. Update documentation

No code changes needed elsewhere - architecture is fully extensible.

## Success Criteria

- ✓ CALENDAR_LOCALE env var controls date format
- ✓ en-US shows MM/DD/YYYY, en-GB shows DD/MM/YYYY
- ✓ Both display and input respect locale
- ✓ All tests pass
- ✓ Existing events render correctly
- ✓ Architecture supports adding new locales easily
