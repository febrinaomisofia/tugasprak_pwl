<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\HomeController;
use App\Http\Controllers\DosenController;

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

// Route::get('/', function () {
//     return view('v_home');
// });

// Route::view('/dosen', 'v_dosen');
// Route::view('/mahasiswa', 'v_mahasiswa');
// Route::view('/about', 'v_about');

Route::get('/', [HomeController::class, 'index']);
Route::get('/home/about', [HomeController::class, 'about']);
Route::get('/dosen', [DosenController::class, 'index']);