<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::post('email', [MailController::class, 'send'])->name('mail');

Route::get('clear', [HomeController::class, 'clear'])->name('clear');

Route::get('/clear', function() {
    Artisan::call('cache:clear');
    // return what you want
});