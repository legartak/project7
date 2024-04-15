<?php

use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\UpcaserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DriverBaseController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/joke', function () {
    return view('joke');
});

Route::get('/roll', function () {
    return redirect('joke');
});

Route::get('/about', function () {
    return view('about-me');
});

Route::get('/calculator/{a}&{b}&{operation}', [CalculatorController::class, 'makeOperation']);

Route::get('/calculator/{a}&{b}', [CalculatorController::class, 'add']);

Route::get('/upcaser/', function () {
    return view('upcaser');
});

Route::post('/upcaser_proceed', [UpcaserController::class, 'proceed']);

Route::get('/driver_data/{id}${fullMode}', [DriverBaseController::class, 'getInfoAboutDriver']);

