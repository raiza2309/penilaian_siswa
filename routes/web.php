<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SoalController;

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
    return view('template');
});

Route::middleware("guest")->group(function () {
    Route::get('login', [AuthController::class, 'login']);
    Route::post('login', [AuthController::class, 'signIn']);
    Route::get('register', [AuthController::class, 'register']);
});

Route::prefix('guru')->group(function () {
    
  Route::prefix('soal')->group(function () {
      Route::get('create', [SoalController::class, 'create']);
      Route::post('/', [SoalController::class, 'store']);
  });
});