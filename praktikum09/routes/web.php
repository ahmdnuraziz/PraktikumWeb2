<?php

use App\Http\Controllers\FormController;
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

Route::get('/', function () {
    return view('welcome');
});

// bikin route kabar
Route::get('/kabar', function () {
    return view('kondisi');
});
// bikin route nilai
Route::get('/nilai', function () {
    return view('nilai');
});
// pasien
Route::get('/pasien', function () {
    return view('pasien');
});
//form
Route:: get('/form', [FormController::class, 'index']);
// route form
Route:: post('/hasil', [FormController::class, 'hasil']);