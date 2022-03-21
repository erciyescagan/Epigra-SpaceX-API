<?php

use App\Http\Controllers\Main\DrawController;
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

Route::get('/draw', [DrawController::class, 'index']);
Route::get('/panel', [DrawController::class, 'panel']);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/create/draw', [DrawController::class, 'createDraw']);
Route::get('/getComments', [DrawController::class, 'getComments']);

require __DIR__.'/auth.php';
