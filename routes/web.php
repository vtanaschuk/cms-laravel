<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoomController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

Route::get('/', function () {
    return view('welcome');
});



// Route::get('/rooms', [RoomController::class, 'index']);
Route::get('/rooms', [RoomController::class, 'index'])->middleware('auth');


Route::get('/rooms/{id}', [RoomController::class, 'singleRoom']);

Route::get('/login', [AuthController::class, 'loginPage'])->name('login');

Route::post('/auth/login', [AuthController::class, 'login']);

Route::get('/auth/logout', [AuthController::class, 'logout']);

Route::get('/register', [AuthController::class, 'registerPage']);

Route::post('/auth/register', [AuthController::class, 'register']);


Route::get('/email/verify', function () {
    return 'hello';
});

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function ($request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');
