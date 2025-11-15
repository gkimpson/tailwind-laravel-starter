<?php

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/calendar', function () {
    return view('calendar');
})->name('calendar');

Route::get('/accordion', function () {
    return view('accordion');
})->name('accordion');

Route::get('/carousel', function () {
    return view('carousel');
})->name('carousel');

Route::get('/modal', function () {
    return view('modal');
})->name('modal');

Route::get('/collapse', function () {
    return view('collapse');
})->name('collapse');

Route::get('/dial', function () {
    return view('dial');
})->name('dial');

Route::get('/dismiss', function () {
    return view('dismiss');
})->name('dismiss');

Route::get('/drawer', function () {
    return view('drawer');
})->name('drawer');

Route::get('/dropdown', function () {
    return view('dropdown');
})->name('dropdown');

Route::get('/popover', function () {
    return view('popover');
})->name('popover');

Route::get('/tooltip', function () {
    return view('tooltip');
})->name('tooltip');

Route::get('/input-counter', function () {
    return view('input-counter');
})->name('input-counter');

Route::get('/tabs', function () {
    return view('tabs');
})->name('tabs');

Route::get('/datepicker', function () {
    return view('datepicker');
})->name('datepicker');

// Navigation Components
Route::get('/navbar', function () {
    return view('navbar');
})->name('navbar');

Route::get('/breadcrumb', function () {
    return view('breadcrumb');
})->name('breadcrumb');

Route::get('/mega-menu', function () {
    return view('mega-menu');
})->name('mega-menu');

Route::get('/bottom-navigation', function () {
    return view('bottom-navigation');
})->name('bottom-navigation');

// Form Components
Route::get('/forms', function () {
    return view('forms');
})->name('forms');

Route::get('/select', function () {
    return view('select');
})->name('select');

Route::get('/toggle', function () {
    return view('toggle');
})->name('toggle');

Route::get('/textarea', function () {
    return view('textarea');
})->name('textarea');

Route::get('/range', function () {
    return view('range');
})->name('range');

Route::get('/floating-label', function () {
    return view('floating-label');
})->name('floating-label');

// Button Components
Route::get('/buttons', function () {
    return view('buttons');
})->name('buttons');

Route::get('/button-group', function () {
    return view('button-group');
})->name('button-group');

// Communication Components
Route::get('/chat-bubble', function () {
    return view('chat-bubble');
})->name('chat-bubble');

// Feedback Components
Route::get('/alerts', function () {
    return view('alerts');
})->name('alerts');

Route::get('/toast', function () {
    return view('toast');
})->name('toast');

Route::get('/progress', function () {
    return view('progress');
})->name('progress');

Route::get('/spinner', function () {
    return view('spinner');
})->name('spinner');

Route::get('/search', function () {
    return view('search');
})->name('search');

Route::get('/badge', function () {
    return view('badge');
})->name('badge');

Route::get('/clipboard', function () {
    return view('clipboard');
})->name('clipboard');

Route::get('/cards', function () {
    return view('cards');
})->name('cards');

Route::get('/tables', function () {
    return view('tables');
})->name('tables');

Route::get('/avatar', function () {
    return view('avatar');
})->name('avatar');

Route::get('/device-mockups', function () {
    return view('device-mockups');
})->name('device-mockups');

Route::get('/rating', function () {
    return view('rating');
})->name('rating');

Route::get('/skeleton', function () {
    return view('skeleton');
})->name('skeleton');

Route::get('/kbd', function () {
    return view('kbd');
})->name('kbd');

Route::get('/stepper', function () {
    return view('stepper');
})->name('stepper');

Route::get('/timeline', function () {
    return view('timeline');
})->name('timeline');

Route::get('/list-group', function () {
    return view('list-group');
})->name('list-group');

Route::get('/description-list', function () {
    return view('description-list');
})->name('description-list');

Route::get('/typography', function () {
    return view('typography');
})->name('typography');

Route::get('/image', function () {
    return view('image');
})->name('image');

Route::get('/video', function () {
    return view('video');
})->name('video');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/sidebar', function () {
    return view('sidebar');
})->name('sidebar');

Route::get('/footer', function () {
    return view('footer');
})->name('footer');

Route::get('/jumbotron', function () {
    return view('jumbotron');
})->name('jumbotron');

Route::get('/pagination', function () {
    return view('pagination');
})->name('pagination');

Route::get('/banner', function () {
    return view('banner');
})->name('banner');

Route::get('/plugins', function () {
    return view('plugins');
})->name('plugins');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

require __DIR__.'/auth.php';
