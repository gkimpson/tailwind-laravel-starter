import { Calendar } from '@fullcalendar/core';
import dayGridPlugin from '@fullcalendar/daygrid';
import timeGridPlugin from '@fullcalendar/timegrid';
import listPlugin from '@fullcalendar/list';
import interactionPlugin from '@fullcalendar/interaction';
import axios from 'axios';
import { Modal, Drawer } from 'flowbite';
import createDateFormatter from './utils/dateFormatter.js';

const calendarApi = axios.create({
    baseURL: '/api/calendar',
    headers: {
        Accept: 'application/json',
        'X-Requested-With': 'XMLHttpRequest',
    },
});

let readEventModalInstance = null;
let deleteEventModalInstance = null;
let updateEventDrawerInstance = null;
let createEventDrawerInstance = null;
const densityStorageKey = 'calendar-density-preference';
const densityButtons = {
    compact: null,
    comfortable: null,
};

// Initialize date formatter with locale from backend
const calendarLocale = window.calendarConfig?.locale || 'en-US';
const dateFormatter = createDateFormatter(calendarLocale);

document.addEventListener('DOMContentLoaded', () => {
    if (document.getElementById('createEventDrawer')) {
        createEventDrawerInstance = new Drawer(document.getElementById('createEventDrawer'), {
            placement: 'right',
            backdrop: true,
        });
    }

    if (document.getElementById('updateEventDrawer')) {
        updateEventDrawerInstance = new Drawer(document.getElementById('updateEventDrawer'), {
            placement: 'right',
            backdrop: true,
        });
    }

    if (document.getElementById('readEventModal')) {
        readEventModalInstance = new Modal(document.getElementById('readEventModal'));
    }

    if (document.getElementById('deleteEventModal')) {
        deleteEventModalInstance = new Modal(document.getElementById('deleteEventModal'));
    }

    initializeDensityToggle();

    if (document.getElementById('calendar')) {
        initializeCalendar();
    }

    initializeCreateEventButton();
    initializeFormHandlers();
    initializeColorPicker();
});


function initializeCalendar() {
    const calendarEl = document.getElementById('calendar');

    const calendar = new Calendar(calendarEl, {
        plugins: [dayGridPlugin, timeGridPlugin, listPlugin, interactionPlugin],
        initialView: 'dayGridMonth',
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek',
        },
        locale: calendarLocale,
        eventTimeFormat: {
            hour: '2-digit',
            minute: '2-digit',
            hour12: false,
            meridiem: false,
        },
        selectable: true,
        editable: true,
        height: 'auto',
        themeSystem: 'standard',
        events: fetchEvents,
        select: handleSelect,
        eventClick: handleEventClick,
        eventDrop: handleEventMove,
        eventResize: handleEventMove,
    });

    calendar.render();
    window.calendar = calendar;
}

async function fetchEvents(info, successCallback, failureCallback) {
    try {
        const response = await calendarApi.get('/events', {
            params: {
                start: info.startStr,
                end: info.endStr,
            },
        });

        successCallback(response.data.data || []);
    } catch (error) {
        console.error(error);
        failureCallback(error);
        showNotification('Unable to load events', 'error');
    }
}

function handleSelect(arg) {
    const startInput = document.getElementById('new-start-date');
    const endInput = document.getElementById('new-end-date');

    if (startInput) {
        startInput.value = arg.startStr.split('T')[0];
    }

    if (endInput) {
        const endDate = arg.end ? arg.endStr.split('T')[0] : arg.startStr.split('T')[0];
        endInput.value = endDate;
    }

    const timeToggle = document.getElementById('select-new-time-range-container');
    if (timeToggle) {
        timeToggle.checked = false;
        toggleTimeRangeContainer(timeToggle, 'new-time-range-container');
    }

    if (createEventDrawerInstance) {
        createEventDrawerInstance.show();
    }

    window.calendar.unselect();
}

function handleEventClick(arg) {
    const event = arg.event;
    const modalEl = document.getElementById('readEventModal');

    if (!modalEl) {
        return;
    }

    const eventId = event.extendedProps.event_id || event.id;
    modalEl.setAttribute('data-event-id', eventId);
    modalEl.setAttribute('data-occurrence-id', event.id);

    document.getElementById('readEventTitle').textContent = event.title;
    document.getElementById('readEventStartDate').textContent = formatDisplayDate(event.start);
    document.getElementById('readEventEndDate').textContent = event.end ? ` → ${formatDisplayDate(event.end)}` : '';
    document.getElementById('readEventDescription').textContent = event.extendedProps.description || 'No description.';
    document.getElementById('readEventLocation').textContent = event.extendedProps.location || 'No location';
    document.getElementById('readEventTime').textContent = event.allDay ? 'All day' : formatDisplayTimeRange(event.start, event.end);
    document.getElementById('readEventRecurrence').textContent = event.extendedProps.is_recurring && event.extendedProps.rrule
        ? event.extendedProps.rrule
        : 'One-time event';

    if (readEventModalInstance) {
        readEventModalInstance.show();
    }
}

async function handleEventMove(arg) {
    const { event } = arg;

    if (event.extendedProps.is_recurring) {
        showNotification('Move recurring events via the edit drawer.', 'info');
        arg.revert();
        return;
    }

    try {
        await persistEventTiming(event);
        showNotification('Event updated successfully', 'success');
        window.calendar.refetchEvents();
    } catch (error) {
        console.error(error);
        arg.revert();
        showNotification('Unable to update event', 'error');
    }
}

function initializeCreateEventButton() {
    const createEventButton = document.getElementById('createEventButton');
    if (createEventButton && createEventDrawerInstance) {
        createEventButton.addEventListener('click', () => {
            createEventDrawerInstance.show();
        });
    }
}

function initializeFormHandlers() {
    const closeReadEventModalButton = document.getElementById('closeReadEventModalButton');
    if (closeReadEventModalButton && readEventModalInstance) {
        closeReadEventModalButton.addEventListener('click', () => readEventModalInstance.hide());
    }

    const closeUpdateEventDrawerButton = document.getElementById('closeUpdateEventDrawerButton');
    if (closeUpdateEventDrawerButton && updateEventDrawerInstance) {
        closeUpdateEventDrawerButton.addEventListener('click', () => {
            updateEventDrawerInstance.hide();
            cleanupBackdrops();
        });
    }

    const closeDeleteEventModalButton = document.getElementById('closeDeleteEventModalButton');
    if (closeDeleteEventModalButton && deleteEventModalInstance) {
        closeDeleteEventModalButton.addEventListener('click', () => deleteEventModalInstance.hide());
    }

    const cancelDeleteEventModalButton = document.getElementById('cancelDeleteEventModalButton');
    if (cancelDeleteEventModalButton && deleteEventModalInstance) {
        cancelDeleteEventModalButton.addEventListener('click', () => deleteEventModalInstance.hide());
    }

    const deleteEventButton = document.getElementById('deleteEventButton');
    if (deleteEventButton && deleteEventModalInstance) {
        deleteEventButton.addEventListener('click', () => deleteEventModalInstance.show());
    }

    const updateDrawerDeleteButton = document.getElementById('updateEventDrawerDeleteButton');
    if (updateDrawerDeleteButton && deleteEventModalInstance) {
        updateDrawerDeleteButton.addEventListener('click', () => deleteEventModalInstance.show());
    }

    const updateEventBtn = document.getElementById('updateEventDrawerButton');
    if (updateEventBtn) {
        updateEventBtn.addEventListener('click', async () => {
            const eventId = getSelectedEventId();
            if (!eventId) {
                return;
            }

            try {
                const details = await fetchEventDetails(eventId);
                populateUpdateForm(details);

                if (readEventModalInstance) {
                    readEventModalInstance.hide();
                }

                if (updateEventDrawerInstance) {
                    updateEventDrawerInstance.show();
                }
            } catch (error) {
                console.error(error);
                showNotification('Unable to load event details', 'error');
            }
        });
    }

    const newEventForm = document.getElementById('newEventForm');
    if (newEventForm) {
        newEventForm.dataset.timezone = newEventForm.dataset.timezone || resolveTimezone();
        newEventForm.addEventListener('submit', async (event) => {
            event.preventDefault();
            const formData = new FormData(newEventForm);

            try {
                await calendarApi.post('/events', buildPayload(formData, {
                    prefix: 'new',
                    timeToggleId: 'select-new-time-range-container',
                    recurrenceField: 'new-rrule',
                    recurrenceEndField: 'new-recurrence-end',
                    colorField: 'new-color',
                    timezone: newEventForm.dataset.timezone,
                }));

                window.calendar.refetchEvents();
                newEventForm.reset();
                const timeToggle = document.getElementById('select-new-time-range-container');
                if (timeToggle) {
                    timeToggle.checked = false;
                    toggleTimeRangeContainer(timeToggle, 'new-time-range-container');
                }

                if (createEventDrawerInstance) {
                    createEventDrawerInstance.hide();
                }

                showNotification('Event created successfully', 'success');
            } catch (error) {
                console.error(error);
                showNotification('Unable to create event', 'error');
            }
        });
    }

    const updateEventForm = document.getElementById('updateEventForm');
    if (updateEventForm) {
        updateEventForm.addEventListener('submit', async (event) => {
            event.preventDefault();
            const eventId = getSelectedEventId();
            if (!eventId) {
                return;
            }

            const formData = new FormData(updateEventForm);

            try {
                await calendarApi.put(`/events/${eventId}`, buildPayload(formData, {
                    prefix: 'update',
                    timeToggleId: 'select-update-time-range-container',
                    recurrenceField: 'update-rrule',
                    recurrenceEndField: 'update-recurrence-end',
                    colorField: 'update-color',
                    timezone: updateEventForm.dataset.timezone,
                }));

                window.calendar.refetchEvents();
                if (updateEventDrawerInstance) {
                    updateEventDrawerInstance.hide();
                }
                if (readEventModalInstance) {
                    readEventModalInstance.hide();
                }
                showNotification('Event updated successfully', 'success');
            } catch (error) {
                console.error(error);
                showNotification('Unable to update event', 'error');
            }
        });
    }

    const confirmDeleteBtn = document.getElementById('confirmEventDeleteButton');
    if (confirmDeleteBtn) {
        confirmDeleteBtn.addEventListener('click', async () => {
            const eventId = getSelectedEventId();
            if (!eventId) {
                return;
            }

            try {
                await calendarApi.delete(`/events/${eventId}`);
                window.calendar.refetchEvents();

                if (deleteEventModalInstance) {
                    deleteEventModalInstance.hide();
                }
                if (readEventModalInstance) {
                    readEventModalInstance.hide();
                }
                if (updateEventDrawerInstance) {
                    updateEventDrawerInstance.hide();
                }

                cleanupBackdrops();
                showNotification('Event deleted successfully', 'success');
            } catch (error) {
                console.error(error);
                showNotification('Unable to delete event', 'error');
            }
        });
    }

    const timeToggle = document.getElementById('select-new-time-range-container');
    if (timeToggle) {
        timeToggle.addEventListener('change', () => toggleTimeRangeContainer(timeToggle, 'new-time-range-container'));
    }

    const updateTimeToggle = document.getElementById('select-update-time-range-container');
    if (updateTimeToggle) {
        updateTimeToggle.addEventListener('change', () => toggleTimeRangeContainer(updateTimeToggle, 'update-time-range-container'));
    }
}

function initializeDensityToggle() {
    densityButtons.compact = document.getElementById('calendarDensityCompact');
    densityButtons.comfortable = document.getElementById('calendarDensityComfortable');

    const storedPreference = localStorage.getItem(densityStorageKey) || 'compact';
    applyDensityMode(storedPreference);

    if (densityButtons.compact) {
        densityButtons.compact.addEventListener('click', () => applyDensityMode('compact'));
    }

    if (densityButtons.comfortable) {
        densityButtons.comfortable.addEventListener('click', () => applyDensityMode('comfortable'));
    }
}

function applyDensityMode(mode) {
    const density = mode === 'comfortable' ? 'comfortable' : 'compact';

    document.documentElement.setAttribute('data-calendar-density', density);
    localStorage.setItem(densityStorageKey, density);
    updateDensityButtons(density);

    if (window.calendar && typeof window.calendar.updateSize === 'function') {
        window.calendar.updateSize();
    }
}

function updateDensityButtons(activeDensity) {
    Object.entries(densityButtons).forEach(([density, button]) => {
        if (!button) {
            return;
        }

        button.setAttribute('aria-pressed', density === activeDensity ? 'true' : 'false');
    });
}

function initializeColorPicker() {
    const colorButtons = document.querySelectorAll('[data-color-picker-target]');

    colorButtons.forEach((button) => {
        button.addEventListener('click', () => {
            const targetId = button.getAttribute('data-color-picker-target');
            const input = document.getElementById(targetId);
            if (!input) {
                return;
            }

            document.querySelectorAll(`[data-color-picker-target="${targetId}"]`).forEach((btn) => btn.setAttribute('data-color-selected', 'false'));

            button.setAttribute('data-color-selected', 'true');
            input.value = button.getAttribute('data-color-picker-value');
        });
    });
}

function toggleTimeRangeContainer(checkbox, containerId) {
    const container = document.getElementById(containerId);
    if (!container) {
        return;
    }

    if (checkbox.checked) {
        container.classList.remove('hidden');
    } else {
        container.classList.add('hidden');
    }
}

function formatDisplayDate(date) {
    return dateFormatter.formatDisplayDate(date);
}

function formatDisplayTimeRange(start, end) {
    return dateFormatter.formatTimeRange(start, end);
}

function formatDisplayTime(date) {
    return dateFormatter.formatTime(date);
}

function formatDateForInput(isoDateString) {
    if (!isoDateString) return '';
    const date = dateFormatter.parseISODate(isoDateString);
    if (!date) return isoDateString; // Fallback to original if parsing fails
    return dateFormatter.formatDate(date);
}

function buildPayload(formData, config) {
    const timeToggle = document.getElementById(config.timeToggleId);
    const usesTime = timeToggle ? timeToggle.checked : false;
    const timezone = config.timezone || resolveTimezone();

    return {
        title: formData.get(`${config.prefix}-title`),
        description: formData.get(`${config.prefix}-description`) || null,
        location: formData.get(`${config.prefix}-location`) || null,
        start_date: formData.get(`${config.prefix}-start-date`),
        end_date: formData.get(`${config.prefix}-end-date`),
        start_time: usesTime ? formData.get(`${config.prefix}-start-time`) : null,
        end_time: usesTime ? formData.get(`${config.prefix}-end-time`) : null,
        all_day: !usesTime,
        color: formData.get(config.colorField) || '#2563eb',
        rrule: formData.get(config.recurrenceField) || null,
        recurrence_ends_at: formData.get(config.recurrenceEndField) || null,
        timezone,
    };
}

function resolveTimezone() {
    try {
        return Intl.DateTimeFormat().resolvedOptions().timeZone;
    } catch (error) {
        return 'UTC';
    }
}

async function fetchEventDetails(eventId) {
    const response = await calendarApi.get(`/events/${eventId}`);
    return response.data.data;
}

async function persistEventTiming(event) {
    const eventId = event.extendedProps.event_id || event.id;
    const details = await fetchEventDetails(eventId);

    const updatedPayload = {
        ...details,
        start_date: formatDateValue(event.start),
        end_date: formatDateValue(event.end ?? event.start),
        start_time: details.all_day ? null : formatTimeValue(event.start),
        end_time: details.all_day ? null : formatTimeValue(event.end ?? event.start),
    };

    await calendarApi.put(`/events/${eventId}`, updatedPayload);
}

function formatDateValue(date) {
    return date.toISOString().split('T')[0];
}

function formatTimeValue(date) {
    return date.toTimeString().slice(0, 5);
}

function populateUpdateForm(details) {
    const updateEventForm = document.getElementById('updateEventForm');
    if (updateEventForm) {
        updateEventForm.dataset.timezone = details.timezone || resolveTimezone();
    }

    document.getElementById('update-title').value = details.title || '';
    document.getElementById('update-description').value = details.description || '';
    document.getElementById('update-location').value = details.location || '';
    document.getElementById('update-start-date').value = formatDateForInput(details.start_date);
    document.getElementById('update-end-date').value = formatDateForInput(details.end_date);
    document.getElementById('update-rrule').value = details.rrule || '';
    document.getElementById('update-recurrence-end').value = formatDateForInput(details.recurrence_ends_at);

    const timeToggle = document.getElementById('select-update-time-range-container');
    if (timeToggle) {
        timeToggle.checked = !details.all_day;
        toggleTimeRangeContainer(timeToggle, 'update-time-range-container');
    }

    document.getElementById('update-start-time').value = details.start_time || '09:00';
    document.getElementById('update-end-time').value = details.end_time || '10:00';

    setColorSelection('editColorsInput', details.color);
}

function setColorSelection(inputId, colorValue) {
    const input = document.getElementById(inputId);
    if (!input) {
        return;
    }

    input.value = colorValue || '#2563eb';
    document.querySelectorAll(`[data-color-picker-target="${inputId}"]`).forEach((button) => {
        const isSelected = button.getAttribute('data-color-picker-value') === input.value;
        button.setAttribute('data-color-selected', String(isSelected));
    });
}

function getSelectedEventId() {
    const modalEl = document.getElementById('readEventModal');
    return modalEl ? modalEl.getAttribute('data-event-id') : null;
}

function cleanupBackdrops() {
    document.querySelectorAll('div[modal-backdrop]').forEach((backdrop) => backdrop.remove());
}

function showNotification(message, type = 'info') {
    document.querySelectorAll('.calendar-notification').forEach((notif) => notif.remove());

    const colorMap = {
        success: { base: 'green', bg: 'bg-green-100', dark: 'dark:bg-green-800', text: 'text-green-500', darkText: 'dark:text-green-200' },
        error: { base: 'red', bg: 'bg-red-100', dark: 'dark:bg-red-800', text: 'text-red-500', darkText: 'dark:text-red-200' },
        info: { base: 'blue', bg: 'bg-blue-100', dark: 'dark:bg-blue-800', text: 'text-blue-500', darkText: 'dark:text-blue-200' },
    };

    const palette = colorMap[type] || colorMap.info;

    const notification = document.createElement('div');
    notification.className = 'calendar-notification fixed top-4 right-4 z-50 w-72 rounded-lg bg-white p-4 text-sm text-gray-600 shadow-sm dark:bg-gray-800 dark:text-gray-300';
    notification.innerHTML = `
        <div class="flex items-center">
            <div class="mr-3 flex h-8 w-8 items-center justify-center rounded-lg ${palette.bg} ${palette.text} ${palette.dark} ${palette.darkText}">
                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v4a1 1 0 00.293.707l2.5 2.5a1 1 0 101.414-1.414L11 10.586V7z" clip-rule="evenodd"></path>
                </svg>
            </div>
            <div>${message}</div>
        </div>
    `;

    document.body.appendChild(notification);

    setTimeout(() => {
        notification.remove();
    }, 4000);
}
