// Import FullCalendar modules
import { Calendar } from '@fullcalendar/core';
import dayGridPlugin from '@fullcalendar/daygrid';
import timeGridPlugin from '@fullcalendar/timegrid';
import listPlugin from '@fullcalendar/list';
import interactionPlugin from '@fullcalendar/interaction';

// Calendar functionality
document.addEventListener('DOMContentLoaded', function() {
    // Initialize calendar if calendar element exists
    if (document.getElementById('calendar')) {
        initializeCalendar();
    }
    
    // Initialize create event button
    initializeCreateEventButton();
    
    // Initialize form handlers
    initializeFormHandlers();
    
    // Initialize color picker
    initializeColorPicker();
});

function initializeCreateEventButton() {
    // Initialize create event button
    const createEventButton = document.getElementById('createEventButton');
    if (createEventButton) {
        createEventButton.addEventListener('click', function() {
            const drawer = new Drawer(document.getElementById('createEventDrawer'), {
                placement: 'right'
            });
            drawer.show();
        });
    }
}

function initializeCalendar() {
    const calendarEl = document.getElementById('calendar');

    const calendar = new Calendar(calendarEl, {
        plugins: [dayGridPlugin, timeGridPlugin, listPlugin, interactionPlugin],
        initialView: 'dayGridMonth',
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
        },
        themeSystem: 'standard',
        height: 'auto',
        editable: true,
        selectable: true,
        selectMirror: true,
        dayMaxEvents: true,
        weekends: true,
        events: [
            // Sample events - these would come from your backend
            {
                id: '1',
                title: 'Team Meeting',
                start: new Date(),
                backgroundColor: '#3B82F6',
                borderColor: '#3B82F6',
                extendedProps: {
                    description: 'Weekly team sync to discuss project progress and upcoming deadlines.',
                    location: 'Conference Room A',
                    guests: ['john@example.com', 'jane@example.com']
                }
            },
            {
                id: '2',
                title: 'Project Review',
                start: new Date(Date.now() + 86400000), // Tomorrow
                backgroundColor: '#10B981',
                borderColor: '#10B981',
                extendedProps: {
                    description: 'Quarterly project review with stakeholders.',
                    location: 'Main Office',
                    guests: ['manager@example.com']
                }
            },
            {
                id: '3',
                title: 'Design Workshop',
                start: new Date(Date.now() + 172800000), // Day after tomorrow
                end: new Date(Date.now() + 259200000), // 3 days from now
                backgroundColor: '#8B5CF6',
                borderColor: '#8B5CF6',
                extendedProps: {
                    description: 'Creative workshop for the new product design.',
                    location: 'Design Studio',
                    guests: ['designer1@example.com', 'designer2@example.com']
                }
            }
        ],
        select: function(arg) {
            // Open create event drawer with selected dates
            document.getElementById('new-start-date').value = arg.startStr.split('T')[0];
            document.getElementById('new-end-date').value = arg.endStr.split('T')[0];
            
            // Show the create event drawer
            const drawer = new Drawer(document.getElementById('createEventDrawer'), {
                placement: 'right'
            });
            drawer.show();
            
            calendar.unselect();
        },
        eventClick: function(arg) {
            // Show event details in modal
            const event = arg.event;
            document.getElementById('readEventTitle').textContent = event.title;
            document.getElementById('readEventStartDate').textContent = event.start.toLocaleDateString();
            document.getElementById('readEventEndDate').textContent = event.end ? event.end.toLocaleDateString() : '';
            document.getElementById('readEventDescription').textContent = event.extendedProps.description || 'No description.';
            document.getElementById('readEventLocation').textContent = event.extendedProps.location || 'No location';
            document.getElementById('readEventTime').textContent = event.allDay ? 'All day' : 
                `${event.start.toLocaleTimeString()} - ${event.end ? event.end.toLocaleTimeString() : ''}`;
            
            // Store event ID for update/delete operations
            document.getElementById('readEventModal').setAttribute('data-event-id', event.id);
            
            // Show the modal
            const modal = new Modal(document.getElementById('readEventModal'));
            modal.show();
        },
        eventDrop: function(arg) {
            // Handle event drag and drop
            console.log('Event dropped:', arg.event);
            // Here you would make an API call to update the event date
            showNotification('Event date updated', 'success');
        },
        eventResize: function(arg) {
            // Handle event resize
            console.log('Event resized:', arg.event);
            // Here you would make an API call to update the event duration
            showNotification('Event duration updated', 'success');
        }
    });

    calendar.render();

    // Make calendar globally accessible
    window.calendar = calendar;
}

function initializeFormHandlers() {
    // New event form submission
    const newEventForm = document.getElementById('newEventForm');
    if (newEventForm) {
        newEventForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(newEventForm);
            const eventData = {
                title: formData.get('new-title'),
                description: formData.get('new-description'),
                start: formData.get('new-start-date'),
                end: formData.get('new-end-date'),
                location: formData.get('new-location'),
                color: formData.get('new-color'),
                startTime: formData.get('new-start-time'),
                endTime: formData.get('new-end-time'),
                guests: [] // Would be populated from guest management
            };
            
            // Add event to calendar
            addEventToCalendar(eventData);
            
            // Close drawer
            const drawer = Drawer.getInstance(document.getElementById('createEventDrawer'));
            drawer.hide();
            
            // Reset form
            newEventForm.reset();
            
            showNotification('Event created successfully', 'success');
        });
    }
    
    // Update event form submission
    const updateEventForm = document.getElementById('updateEventForm');
    if (updateEventForm) {
        updateEventForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(updateEventForm);
            const eventId = document.getElementById('readEventModal').getAttribute('data-event-id');
            
            const eventData = {
                id: eventId,
                title: formData.get('update-title'),
                description: formData.get('update-description'),
                start: formData.get('update-start-date'),
                end: formData.get('update-end-date'),
                location: formData.get('update-location'),
                color: formData.get('update-color'),
                startTime: formData.get('update-start-time'),
                endTime: formData.get('update-end-time'),
                guests: [] // Would be populated from guest management
            };
            
            // Update event in calendar
            updateEventInCalendar(eventData);
            
            // Close drawer
            const drawer = Drawer.getInstance(document.getElementById('updateEventDrawer'));
            drawer.hide();
            
            // Close view modal
            const modal = Modal.getInstance(document.getElementById('readEventModal'));
            modal.hide();
            
            showNotification('Event updated successfully', 'success');
        });
    }
    
    // Delete event confirmation
    const confirmDeleteBtn = document.getElementById('confirmEventDeleteButton');
    if (confirmDeleteBtn) {
        confirmDeleteBtn.addEventListener('click', function() {
            const eventId = document.getElementById('readEventModal').getAttribute('data-event-id');
            
            // Delete event from calendar
            deleteEventFromCalendar(eventId);
            
            // Close modals
            const deleteModal = Modal.getInstance(document.getElementById('deleteEventModal'));
            deleteModal.hide();
            
            const viewModal = Modal.getInstance(document.getElementById('readEventModal'));
            viewModal.hide();
            
            showNotification('Event deleted successfully', 'success');
        });
    }
    
    // Update button in view modal
    const updateEventBtn = document.getElementById('updateEventDrawerButton');
    if (updateEventBtn) {
        updateEventBtn.addEventListener('click', function() {
            const eventId = document.getElementById('readEventModal').getAttribute('data-event-id');
            const event = window.calendar.getEventById(eventId);
            
            if (event) {
                // Populate update form with event data
                document.getElementById('update-title').value = event.title;
                document.getElementById('update-description').value = event.extendedProps.description || '';
                document.getElementById('update-start-date').value = event.startStr.split('T')[0];
                document.getElementById('update-end-date').value = event.end ? event.endStr.split('T')[0] : event.startStr.split('T')[0];
                document.getElementById('update-location').value = event.extendedProps.location || '';
                
                // Set color
                const colorInput = document.getElementById('editColorsInput');
                if (colorInput) {
                    colorInput.value = event.backgroundColor;
                }
            }
        });
    }
    
    // Time range toggle handlers
    const newTimeRangeCheckbox = document.getElementById('select-new-time-range-container');
    const newTimeRangeContainer = document.getElementById('new-time-range-container');
    
    if (newTimeRangeCheckbox && newTimeRangeContainer) {
        newTimeRangeCheckbox.addEventListener('change', function() {
            if (this.checked) {
                newTimeRangeContainer.classList.remove('hidden');
            } else {
                newTimeRangeContainer.classList.add('hidden');
            }
        });
    }
    
    const updateTimeRangeCheckbox = document.getElementById('select-update-time-range-container');
    const updateTimeRangeContainer = document.getElementById('update-time-range-container');
    
    if (updateTimeRangeCheckbox && updateTimeRangeContainer) {
        updateTimeRangeCheckbox.addEventListener('change', function() {
            if (this.checked) {
                updateTimeRangeContainer.classList.remove('hidden');
            } else {
                updateTimeRangeContainer.classList.add('hidden');
            }
        });
    }
}

function initializeColorPicker() {
    // Color picker for new event
    const newColorButtons = document.querySelectorAll('[data-color-picker-target="newColorsInput"]');
    const newColorInput = document.getElementById('newColorsInput');
    
    newColorButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Remove selected state from all buttons
            newColorButtons.forEach(btn => btn.setAttribute('data-color-selected', 'false'));
            
            // Add selected state to clicked button
            this.setAttribute('data-color-selected', 'true');
            
            // Update hidden input
            if (newColorInput) {
                newColorInput.value = this.getAttribute('data-color-picker-value') + '-600';
            }
        });
    });
    
    // Color picker for update event
    const editColorButtons = document.querySelectorAll('[data-color-picker-target="editColorsInput"]');
    const editColorInput = document.getElementById('editColorsInput');
    
    editColorButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Remove selected state from all buttons
            editColorButtons.forEach(btn => btn.setAttribute('data-color-selected', 'false'));
            
            // Add selected state to clicked button
            this.setAttribute('data-color-selected', 'true');
            
            // Update hidden input
            if (editColorInput) {
                editColorInput.value = this.getAttribute('data-color-picker-value') + '-600';
            }
        });
    });
}

function addEventToCalendar(eventData) {
    const newEvent = {
        id: Date.now().toString(), // Generate unique ID
        title: eventData.title,
        start: eventData.start + (eventData.startTime ? 'T' + eventData.startTime : ''),
        end: eventData.end + (eventData.endTime ? 'T' + eventData.endTime : ''),
        backgroundColor: eventData.color,
        borderColor: eventData.color,
        extendedProps: {
            description: eventData.description,
            location: eventData.location,
            guests: eventData.guests
        }
    };
    
    window.calendar.addEvent(newEvent);
}

function updateEventInCalendar(eventData) {
    const event = window.calendar.getEventById(eventData.id);
    
    if (event) {
        event.setProp('title', eventData.title);
        event.setProp('description', eventData.description);
        event.setStart(eventData.start + (eventData.startTime ? 'T' + eventData.startTime : ''));
        event.setEnd(eventData.end + (eventData.endTime ? 'T' + eventData.endTime : ''));
        event.setProp('backgroundColor', eventData.color);
        event.setProp('borderColor', eventData.color);
        event.setExtendedProp('location', eventData.location);
        event.setExtendedProp('guests', eventData.guests);
    }
}

function deleteEventFromCalendar(eventId) {
    const event = window.calendar.getEventById(eventId);
    
    if (event) {
        event.remove();
    }
}

function showNotification(message, type = 'info') {
    // Create notification element
    const notification = document.createElement('div');
    notification.className = `fixed top-4 right-4 z-50 p-4 mb-4 text-sm text-gray-500 bg-white rounded-lg shadow-sm dark:bg-gray-800 dark:text-gray-400`;
    notification.innerHTML = `
        <div class="flex items-center">
            <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 rounded-lg bg-${type === 'success' ? 'green' : 'blue'}-100 text-${type === 'success' ? 'green' : 'blue'}-500 dark:bg-${type === 'success' ? 'green' : 'blue'}-800 dark:text-${type === 'success' ? 'green' : 'blue'}-200">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 0l-2 2a1 1 0 101.414 1.414L9 11.586l3.293 3.293a1 1 0 001.414-1.414l-3.293-3.293z" clip-rule="evenodd"></path>
                </svg>
            </div>
            <div class="ml-3 text-sm font-normal">${message}</div>
        </div>
    `;
    
    // Add to document
    document.body.appendChild(notification);
    
    // Remove after 3 seconds
    setTimeout(() => {
        notification.remove();
    }, 3000);
}