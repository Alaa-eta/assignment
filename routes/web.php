<?php

use App\Http\Controllers\FullCalenderController;
use Illuminate\Support\Facades\Route;

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

Route::get('/css', function () {
    return view('animation');
});

Route::get('/js', function () {
    return view('js');
});


Route::get('full-calender', [FullCalenderController::class, 'index']);

Route::post('full-calender-ajax', [FullCalenderController::class, 'ajax']);

