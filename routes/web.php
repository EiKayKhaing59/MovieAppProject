<?php

use App\Http\Controllers\AdminController;
use App\Livewire\Counter;
use Illuminate\Support\Facades\Route;
use App\Livewire\MovieIndex;



Route::get('/counter',Counter::class);
 Route::middleware(['auth:sanctum', 'verified', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
   Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::get('movies', MovieIndex::class)->name('movies.index');
 // Route::get('cus', CustomerIndex::class)->name('customers.index');
 });

Route::get('/', function () {
    return view('welcome');
});

Route::get('/create', function () {
    return view('Livewire.create-movie');
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
