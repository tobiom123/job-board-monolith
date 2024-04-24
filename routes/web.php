<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use App\Mail\JobPosted;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('test', function () {
    Mail::to('tobiomotosho123@gmail.com')->send(new JobPosted());
});

Route::view('/', 'home');
Route::view('/contact', 'contact');

Route::resource('jobs', JobController::class)->only(['index', 'show']);
Route::resource('jobs', JobController::class)->only(['create', 'store', 'destroy'])->middleware('auth');
Route::resource('jobs', JobController::class)->only(['edit', 'update'])->middleware(['auth', 'can:update,job']);

Route::view('/register', 'auth.register');
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::view('/login', 'auth.login')->name('login');
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);
