<?php

use App\Http\Controllers\AdminController;
use App\Livewire\Booking\Index;
use App\Livewire\BookingDetail;
use App\Livewire\Showtimes;
use App\Livewire\Time\TimeEdit;
use Illuminate\Support\Facades\Route;
use App\Livewire\Showtime\Create;
use App\Livewire\SeatingPlan\Show;
use App\Livewire\Movie\MovieIndex;
use App\Livewire\Movie\Moviedetail;
use App\Livewire\Customer\CustomerIndex;
use App\Livewire\Customer\CreateCustomer;
use App\Livewire\Customer\CustomerEdit;
use App\Livewire\Time\TimeIndex;
use App\Livewire\Time\CreateTime;
use App\Livewire\Booking\BookingIndex;
use App\Livewire\Booking\BookingCreate;
use App\Livewire\Movie\MovieEdit;
Route::middleware(['auth:sanctum', 'verified', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::get('movieindex', MovieIndex::class)->name('movieindexs');
    Route::get('moviedetail', Moviedetail::class)->name('moviedetails');
    Route::get('customers', CustomerIndex::class)->name('customers.index');
    Route::get('create-customer',CreateCustomer ::class)->name('user');
    Route::get('time', TimeIndex::class)->name('times.index');
    Route::get('create-times', CreateTime::class)->name('create-time.index');
    Route::get('booking-create', BookingCreate::class)->name('tickets.index');
    Route::get('booking-index',BookingIndex ::class)->name('booking-index');
    Route::get('showtime-create', Create::class)->name('show-time.index');
    Route::get('showtimedisplay-index', Show::class)->name('showtime-display.index');
    Route::get('edit/{movieId}/edit', MovieEdit::class)->name('movie.edit');
    Route::get('indexs', Index::class)->name('indexs');
    Route::get('customers/{customerId}/edit', CustomerEdit::class)->name('customers.edit');
    Route::get('times/{timeslotId}/edit',TimeEdit::class)->name('times.edit');
});
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
