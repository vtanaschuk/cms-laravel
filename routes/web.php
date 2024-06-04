<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, "show"])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard/rooms/{id}', [RoomController::class, "singleRoom"])->middleware(['auth', 'verified']);
Route::get('/dashboard/edit-rooms/{id}', [RoomController::class, "editSingleRoom"])->middleware(['auth', 'verified']);
Route::post('/dashboard/action-edit-rooms/{id}', [RoomController::class, "update"])->middleware(['auth', 'verified']);

Route::get('/dashboard/user/{id}', [UserController::class, "singleUser"])->middleware(['auth', 'verified']);
Route::get('/dashboard/edit-user/{id}', [UserController::class, "editSingleUser"])->middleware(['auth', 'verified']);
Route::post('/dashboard/action-edit-user/{id}', [UserController::class, "update"])->middleware(['auth', 'verified']);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
