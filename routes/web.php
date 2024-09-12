<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\HomeController;


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


Route::get('/', function () {
    return view('auth.register');
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register')->middleware('guest');
Route::post('register', [RegisterController::class, 'register'])->middleware('guest');
Route::get('get-countries', [LocationController::class, 'getCountries'])->name('get.countries');
Route::get('get-states', [LocationController::class, 'getStates'])->name('get.states');
Route::get('get-cities', [LocationController::class, 'getCities'])->name('get.cities');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/cities/data', [HomeController::class, 'getCityData'])->name('cities.data');



