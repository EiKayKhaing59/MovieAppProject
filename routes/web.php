<?php

use App\Http\Controllers\AdminController;
use App\Livewire\Booking;
use App\Livewire\BookingDetail;
use App\Livewire\BookingIndex;
use App\Livewire\Counter;
use App\Livewire\CreateTime;
use App\Livewire\MovieComponent;
use App\Livewire\MovieDetail;
use App\Livewire\SeatingPlan;
use App\Livewire\Showtimes;
use App\Livewire\Tickets;
use Illuminate\Support\Facades\Route;
use App\Livewire\MovieIndex;
use App\Livewire\CustomerIndex;
use App\Livewire\CreateCustomer;
use App\Livewire\TimeIndex;
use App\Livewire\Showtime\Create;
use App\Livewire\SeatingPlan\Show;
Route::get('/counter',Counter::class);
 Route::middleware(['auth:sanctum', 'verified', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
Route::get('/', [AdminController::class, 'index'])->name('index');
Route::get('movies', MovieIndex::class)->name('movies.index');
  Route::get('customers', CustomerIndex::class)->name('customers.index');
  Route::get('user',CreateCustomer::class)->name('user');
  Route::get('details', MovieDetail::class)->name('movie-details.index');
  Route::get('time',TimeIndex::class)->name('times.index');
  Route::get('booking',Booking::class)->name('booking.index');
  Route::get('booking-detail',BookingDetail::class)->name('booking.detail.index');
  Route::get('create-time',CreateTime::class)->name('create-time.index');
  Route::get('tickets',Tickets::class)->name('tickets.index');
  Route::get('showtimes',Showtimes::class)->name('showtimes.index');
  Route::get('booking-index',BookingIndex::class)->name('booking-index');
  Route::get('show-index',Create::class)->name('show-time.index');
  Route::get('showtimedisplay-index',Show::class)->name('showtime-display.index');
 });


// Route::get('user',CreateCustomer::class)->name('user');
 
Route::get('/', function () {
    return view('welcome');
});

Route::get('/create', function () {
    return view('Livewire.create-movie');
});

Route::get('/time', function () {
    return view('Livewire.time-index');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        auth()->user()->assignRole('admin');
        return view('dashboard');
    })->name('dashboard');
});
