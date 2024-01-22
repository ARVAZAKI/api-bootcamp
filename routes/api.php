<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\kelasController;
use App\Http\Controllers\nilaiController;
use App\Http\Controllers\siswaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/kelas', [kelasController::class, 'showKelas']);
Route::post('/kelas', [kelasController::class, 'tambahKelas']);
Route::get('/kelas/{id}', [kelasController::class, 'detailKelas']);
Route::put('/kelas/{id}', [kelasController::class, 'updateKelas']);
Route::delete('/kelas/{id}', [kelasController::class, 'delete']);

Route::get('/siswa',[siswaController::class, "showSiswa"]);
Route::post('/siswa',[siswaController::class, "createSiswa"]);
Route::get('/siswa/{_id}',[siswaController::class, "detailSiswa"]);

Route::post('/nilai', [nilaiController::class,'addScore']);