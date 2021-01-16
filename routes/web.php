<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\StudentsController;
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
//     return view('index');
// });

// Route::get('/about', function () {
//     $nama = "Berry Akbar Sukmantono";
//     return view('about', ['nama' => $nama]);
// });

Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);


// Route::get('/student', [StudentsController::class, 'index']);
// Route::get('/student/create', [StudentsController::class, 'create']);
// Route::post('/student', [StudentsController::class, 'store']);
// Route::get('/student/{student}', [StudentsController::class, 'show']);
// Route::delete('student/{student}', [StudentsController::class, 'destroy']);
// Route::get('/student/{student}/edit', [StudentsController::class, 'edit']);
// Route::put('/student/{student}', [StudentsController::class, 'update']);

Route::resource('student', StudentsController::class);
