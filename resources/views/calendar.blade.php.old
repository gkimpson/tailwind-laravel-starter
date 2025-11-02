@extends('layouts.app')

@section('content')
<div class="bg-gray-50 dark:bg-gray-900 antialiased">
    <div class="relative bg-white dark:bg-gray-900">
        <!-- Calendar Header -->
        <div class="border-b border-gray-200 dark:border-gray-700 px-4 py-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between">
                <h1 class="text-xl font-semibold text-gray-900 dark:text-white">Calendar</h1>
                <div class="flex items-center space-x-3">
                    <button
                        id="createEventButton"
                        data-drawer-target="createEventDrawer"
                        class="inline-flex items-center rounded-lg bg-primary-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                    >
                        <svg class="-ms-0.5 me-1.5 h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M12 2a1 1 0 0 1 1 1v8h8a1 1 0 1 1 0 2h-8v8a1 1 0 1 1-2 0v-8H3a1 1 0 1 1 0-2h8V3a1 1 0 0 1 1-1Z" clip-rule="evenodd"/>
                        </svg>
                        Add Event
                    </button>
                </div>
            </div>
        </div>

        <!-- Calendar Container -->
        <div class="p-4 sm:p-6 lg:p-8">
            <div id="calendar" class="bg-white dark:bg-gray-800 rounded-lg shadow-sm"></div>
        </div>
    </div>
</div>

<!-- Include Calendar Components -->
@include('calendar.components.create-event-drawer')
@include('calendar.components.view-event-modal')
@include('calendar.components.update-event-drawer')
@include('calendar.components.delete-event-modal')

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.10/index.global.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
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
    });
</script>
@endpush
