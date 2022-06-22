<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::post('email', [MailController::class, 'send'])->name('mail');