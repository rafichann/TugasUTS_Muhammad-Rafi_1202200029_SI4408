<?php

use App\Http\Controllers\API\mahasiswaController;
use App\Http\Controllers\API\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('mahasiswa', [mahasiswaController::class, 'index']);
Route::post('mahasiswa/input', [mahasiswaController::class, 'input']);
Route::get('mahasiswa/show/{id}', [mahasiswaController::class, 'show']);
Route::post('mahasiswa/update/{id}', [mahasiswaController::class, 'update']);
Route::get('mahasiswa/destroy/{id}', [mahasiswaController::class, 'destroy']);
Route::get('mahasiswa/nim/{nim}', [mahasiswaController::class, 'nim']);


