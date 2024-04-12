<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\SendEmailController;


Route::get('/', [SendEmailController::class, 'loadForm']);
Route::post('/send/email', [SendEmailController::class, 'send'])->name('send');