@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/calendar-app.min.css') }}">
    <style>
        [data-calendar-density='comfortable'] #calendar {
            --fc-slot-min-height: 5rem;
        }

        [data-calendar-density='comfortable'] #calendar .fc-timegrid-slot,
        [data-calendar-density='comfortable'] #calendar .fc-timegrid-slot-lane {
            height: 5rem !important;
            min-height: 5rem !important;
        }

        [data-calendar-density='comfortable'] #calendar .fc-timegrid-col-frame,
        [data-calendar-density='comfortable'] #calendar .fc-timegrid-slot-label-frame,
        [data-calendar-density='comfortable'] #calendar .fc-timegrid-axis-frame {
            height: 5rem !important;
            min-height: 5rem !important;
        }

        [data-calendar-density='comfortable'] #calendar .fc-timegrid-event,
        [data-calendar-density='comfortable'] #calendar .fc-timegrid-event-harness,
        [data-calendar-density='comfortable'] #calendar .fc-timegrid-event-harness-inset {
            min-height: 3.75rem;
        }

        [data-calendar-density='comfortable'] #calendar .fc-daygrid-day-frame {
            min-height: 9rem;
        }
    </style>
@endpush

@section('content')

    <div class="">

        <div id="main-content" class="relative h-full w-full">
            <main>

                <div class="relative bg-white dark:bg-gray-900">
                    <div class="flex flex-wrap items-center justify-end gap-3 px-4 pt-4">
                        <span class="text-sm font-medium text-gray-600 dark:text-gray-300">Density</span>
                        <div data-calendar-density-toggle>
                            <button
                                id="calendarDensityCompact"
                                type="button"
                                class="density-option"
                                aria-pressed="true"
                            >Compact</button>
                            <button
                                id="calendarDensityComfortable"
                                type="button"
                                class="density-option"
                                aria-pressed="false"
                            >Comfortable</button>
                        </div>
                    </div>

                    <div id="calendar"></div>
                </div>

                @include('calendar.components.create-event-drawer')

                @include('calendar.components.view-event-modal')

                @include('calendar.components.delete-event-modal')

                @include('calendar.components.update-event-modal')
            </main>

        </div>
    </div>

    <script>
        window.calendarConfig = {
            locale: @js($calendarLocale),
            datepickerFormat: @js($datepickerFormat),
        };
    </script>

    @vite(['resources/js/calendar.js'])

@endsection
