<?php

use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;

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
    return view('core.dashboard');
});

Route::get('reservations', function () {
    return view('core.reservations');
})->name('reservations.index');

Route::post('reservations', [ReservationController::class, 'store'])->name('reservations.store');
