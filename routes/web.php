<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;

use App\Http\Controllers\WelcomeController;


use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactController;


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


Route::get('/',[CustomAuthController::class,'login']);
Route::get('/login',[CustomAuthController::class,'login']);
Route::get('/registration',[CustomAuthController::class,'registration']);
Route::get('/home', [WelcomeController::class, 'index'])->name('home');



Route::post('/register-user', [CustomAuthController::class, 'registerUser'])->name('register-user');
Route::post('/login-user', [CustomAuthController::class, 'loginUser'])->name('login-user');

Route::get('/contact', [ContactController::class, 'create'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/about', [AboutUsController::class, 'index'])->name('about');
