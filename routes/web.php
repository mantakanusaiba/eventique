<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\WeddingController;
use App\Http\Controllers\BookingController;


use App\Http\Controllers\AuthController;
use App\Http\Controllers\BirthdayController;
use App\Http\Controllers\CorporateController;
use App\Http\Controllers\EventPackageController;


/*
|--------------------------------------------------------------------------|
| Web Routes                                                                |
|--------------------------------------------------------------------------|
| Here is where you can register web routes for your application. These    |
| routes are loaded by the RouteServiceProvider within a group which       |
| contains the "web" middleware group. Now create something great!          |
|--------------------------------------------------------------------------|
*/

Route::get('/',[CustomAuthController::class,'login']);

Route::get('/registration',[CustomAuthController::class,'registration']);
Route::get('/home', [WelcomeController::class, 'index'])->name('home');
Route::get('/login', [CustomAuthController::class, 'login'])->name('login');





Route::post('/register-user', [CustomAuthController::class, 'registerUser'])->name('register-user');
Route::post('/login-user', [CustomAuthController::class, 'loginUser'])->name('login-user');

Route::view('/contact', 'contact')->name('contact'); 
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store'); 
Route::get('/about', [AboutUsController::class, 'index'])->name('about');
Route::get('/forgot-password', [ForgotPasswordController::class, 'showForgotPasswordForm'])->name('password.request');
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLink'])->name('password.email');
Route::get('/reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/reset-password', [ResetPasswordController::class, 'resetPassword'])->name('password.update');

Route::get('/wedding-packages', [WeddingController::class, 'index'])->name('wedding-packages');
Route::get('/wedding-package/{id}', [WeddingController::class, 'show'])->name('wedding-package.show');


Route::get('/birthday', [BirthdayController::class, 'index'])->name('birthday.index');
Route::get('/birthday/{id}', [BirthdayController::class, 'show'])->name('birthday.show');



Route::get('/corporate', [CorporateController::class, 'index'])->name('corporate.index');
Route::get('/corporate/{id}', [CorporateController::class, 'show'])->name('corporate.show');




Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    });
});



Route::get('/book-now', [BookingController::class, 'create'])->name('book.create');
Route::post('/book-now', [BookingController::class, 'store'])->name('book.store');


Route::get('/event-packages', [EventPackageController::class, 'index']);
Route::post('/add-package', [EventPackageController::class, 'store']);
Route::delete('/delete-package/{id}', [EventPackageController::class, 'destroy']);

