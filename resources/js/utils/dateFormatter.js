/**
 * Calendar Date Formatter
 *
 * Provides locale-aware date formatting for the calendar feature.
 * Uses the Intl.DateTimeFormat API for consistent, extensible date handling.
 */

/**
 * Locale to datepicker format mapping
 */
const DATEPICKER_FORMATS = {
    'en-US': 'mm/dd/yyyy',
    'en-GB': 'dd/mm/yyyy',
};

/**
 * Locale to date format pattern mapping (for display)
 */
const DATE_FORMAT_PATTERNS = {
    'en-US': { year: 'numeric', month: '2-digit', day: '2-digit' }, // MM/DD/YYYY
    'en-GB': { year: 'numeric', month: '2-digit', day: '2-digit' }, // DD/MM/YYYY
};

/**
 * Initialize the date formatter with a specific locale
 *
 * @param {string} locale - The locale code (e.g., 'en-US', 'en-GB')
 * @returns {object} Formatter methods
 */
export function createDateFormatter(locale = 'en-US') {
    // Validate and fallback to en-US if locale is invalid
    const validLocale = DATEPICKER_FORMATS[locale] ? locale : 'en-US';

    if (locale !== validLocale) {
        console.warn(`Invalid calendar locale '${locale}', falling back to 'en-US'`);
    }

    /**
     * Format a date object to a locale-specific string
     *
     * @param {Date} date - The date to format
     * @returns {string} Formatted date string (e.g., '06/19/2025' or '19/06/2025')
     */
    function formatDate(date) {
        if (!(date instanceof Date) || isNaN(date)) {
            console.error('Invalid date provided to formatDate:', date);
            return '';
        }

        const formatter = new Intl.DateTimeFormat(validLocale, DATE_FORMAT_PATTERNS[validLocale]);
        return formatter.format(date);
    }

    /**
     * Format a date object to include date and time
     *
     * @param {Date} date - The date to format
     * @returns {string} Formatted date and time string
     */
    function formatDateTime(date) {
        if (!(date instanceof Date) || isNaN(date)) {
            console.error('Invalid date provided to formatDateTime:', date);
            return '';
        }

        const dateStr = formatDate(date);
        const timeStr = date.toLocaleTimeString(validLocale, { hour: '2-digit', minute: '2-digit', hour12: false });
        return `${dateStr} ${timeStr}`;
    }

    /**
     * Format a time from a date object
     *
     * @param {Date} date - The date object containing time
     * @returns {string} Formatted time string (e.g., '14:30')
     */
    function formatTime(date) {
        if (!(date instanceof Date) || isNaN(date)) {
            console.error('Invalid date provided to formatTime:', date);
            return '';
        }

        return date.toLocaleTimeString(validLocale, { hour: '2-digit', minute: '2-digit', hour12: false });
    }

    /**
     * Format a display date with day of week and month name
     * Example: "Mon, Nov 15" → "Mon, 11/15/2025" (en-US) or "Mon, 15/11/2025" (en-GB)
     *
     * @param {Date} date - The date to format
     * @returns {string} Formatted display string
     */
    function formatDisplayDate(date) {
        if (!(date instanceof Date) || isNaN(date)) {
            console.error('Invalid date provided to formatDisplayDate:', date);
            return '';
        }

        const weekday = date.toLocaleDateString(validLocale, { weekday: 'short' });
        const dateStr = formatDate(date);
        return `${weekday}, ${dateStr}`;
    }

    /**
     * Format a time range for display
     *
     * @param {Date} start - Start time
     * @param {Date} end - End time (optional)
     * @returns {string} Formatted time range (e.g., '14:30 - 16:00' or '14:30')
     */
    function formatTimeRange(start, end) {
        const startText = formatTime(start);
        const endText = end ? formatTime(end) : '';
        return endText ? `${startText} - ${endText}` : startText;
    }

    /**
     * Parse an ISO date string to a Date object
     *
     * @param {string} isoString - ISO 8601 date string
     * @returns {Date|null} Date object or null if invalid
     */
    function parseISODate(isoString) {
        if (!isoString || typeof isoString !== 'string') {
            return null;
        }

        const date = new Date(isoString);
        return isNaN(date) ? null : date;
    }

    /**
     * Get the datepicker format string for the current locale
     *
     * @returns {string} Datepicker format (e.g., 'mm/dd/yyyy' or 'dd/mm/yyyy')
     */
    function getDatepickerFormat() {
        return DATEPICKER_FORMATS[validLocale];
    }

    /**
     * Get the current locale
     *
     * @returns {string} Current locale code
     */
    function getLocale() {
        return validLocale;
    }

    /**
     * Convert a date to YYYY-MM-DD format (ISO date string without time)
     * Useful for API requests
     *
     * @param {Date} date - The date to convert
     * @returns {string} ISO date string (e.g., '2025-11-15')
     */
    function toISODateString(date) {
        if (!(date instanceof Date) || isNaN(date)) {
            console.error('Invalid date provided to toISODateString:', date);
            return '';
        }

        const year = date.getFullYear();
        const month = String(date.getMonth() + 1).padStart(2, '0');
        const day = String(date.getDate()).padStart(2, '0');
        return `${year}-${month}-${day}`;
    }

    // Return public API
    return {
        formatDate,
        formatDateTime,
        formatTime,
        formatDisplayDate,
        formatTimeRange,
        parseISODate,
        getDatepickerFormat,
        getLocale,
        toISODateString,
    };
}

// Export a default formatter instance for convenience
// This will be initialized with the actual locale when imported in calendar.js
export default createDateFormatter;
