<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\TeacherController;
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
    $title = "Skaju | Beranda";
    return view('home', compact('title'));
})->name('login');

Route::group(['middleware' => 'guest'], function() {
    Route::post('/register', [AuthenticationController::class, 'register']);
    Route::post('/login', [AuthenticationController::class, 'login']);
    Route::get('/kelas/{id_kelas}/edit', [KelasController::class, "edit"]);
});

Route::group(['middleware' => 'auth'], function() {
});
Route::resource('/kelas', KelasController::class)->parameter('kelas', 'kelas');
Route::resource('/teacher', TeacherController::class);
