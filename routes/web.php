<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\ObatsController;
use App\Http\Controllers\Api\ResepsController;
use App\Http\Controllers\Api\KonsulsController;
use App\Http\Controllers\PagesController;


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



Route::get('/', [PagesController::class, 'home']);


Route::post('/login', [UserController::class, 'login']);
Route::middleware('auth:sanctum')->get('/users', [UserController::class, 'index']);
Route::middleware('auth:sanctum')->post('/users', [UserController::class, 'store']);
Route::middleware('auth:sanctum')->get('/users/show/{id}', [UserController::class, 'show']);
Route::middleware('auth:sanctum')->put('/users/update/{id}', [UserController::class, 'update']);
Route::middleware('auth:sanctum')->delete('/users/destroy/{id}', [UserController::class, 'destroy']);

Route::middleware('auth:sanctum')->get('/obats', [ObatsController::class, 'index']);
Route::middleware('auth:sanctum')->post('/obats', [ObatsController::class, 'store']);
Route::middleware('auth:sanctum')->get('/obats/show/{id}', [ObatsController::class, 'show']);
Route::middleware('auth:sanctum')->put('/obats/update/{id}', [ObatsController::class, 'update']);
Route::middleware('auth:sanctum')->delete('/obats/destroy/{id}', [ObatsController::class, 'destroy']);

Route::middleware('auth:sanctum')->get('/reseps', [ResepsController::class, 'index']);
Route::middleware('auth:sanctum')->post('/reseps', [ResepsController::class, 'store']);
Route::middleware('auth:sanctum')->get('/reseps/show/{id}', [ResepsController::class, 'show']);
Route::middleware('auth:sanctum')->put('/reseps/update/{id}', [ResepsController::class, 'update']);
Route::middleware('auth:sanctum')->delete('/reseps/destroy/{id}', [ResepsController::class, 'destroy']);

Route::middleware('auth:sanctum')->get('/konsuls', [KonsulsController::class, 'index']);
Route::middleware('auth:sanctum')->post('/konsuls', [KonsulsController::class, 'store']);
Route::middleware('auth:sanctum')->get('/konsuls/show/{id}', [KonsulsController::class, 'show']);
Route::middleware('auth:sanctum')->get('/konsuls/showReseps', [KonsulsController::class, 'showReseps']);
Route::middleware('auth:sanctum')->put('/konsuls/update/{id}', [KonsulsController::class, 'update']);
Route::middleware('auth:sanctum')->delete('/konsuls/destroy/{id}', [KonsulsController::class, 'destroy']);
