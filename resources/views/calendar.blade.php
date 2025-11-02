@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/calendar-app.min.css') }}">
@endpush

@section('content')

    <div class="">

        <div id="main-content" class="relative h-full w-full">
            <main>

                <div class="relative bg-white dark:bg-gray-900">
                    <div id="calendar"></div>
                </div>

                @include('calendar.components.create-event-drawer')

                @include('calendar.components.view-event-modal')

                @include('calendar.components.delete-event-modal')

                @include('calendar.components.update-event-modal')
            </main>

        </div>
    </div>

    @vite(['resources/js/calendar.js'])

@endsection
