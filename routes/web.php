<?php

use App\Http\Controllers\SendMail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [MainController::class, 'about']);

Route::get('/contact', [MainController::class, 'contact'])->name('contact');

Route::post('/contact/send', [SendMail::class, 'store']);
