<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobPostingController;
use App\Http\Controllers\EventBookingController;
 
 
Route::get('/', function () {
    return view('newlogin');
});

Route::get('/jobposting', function () {
    return view('jobposting');
});
 
Route::get('/alumnieventbook', function () {
    return view('alumnibook');
});

Route::get('/login', function () {
    return view('newlogin');
});


Route::post('/store-job-posting', [JobPostingController::class, 'store']);
Route::post('/booking', [EventBookingController::class,'store']);


Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
});
 
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [HomeController::class, 'index']);
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
});
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/






