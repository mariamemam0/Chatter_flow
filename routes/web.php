<?php

use App\Livewire\Chat;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');


 Route::get('chat',Chat::class)->name('chat')->middleware('auth');
require __DIR__.'/settings.php';
