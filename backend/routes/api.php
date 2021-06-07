<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
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
Route::get('/home', [TaskController::class, 'index']);
Route::post('/create', [TaskController::class, 'store']);
Route::put('/edit/{id}', [TaskController::class, 'update']);
Route::delete('/delete/{id}', [TaskController::class, 'delete']);