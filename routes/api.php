<?php

use App\Http\Controllers\TaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::apiResource('/task',TaskController::class);
Route::get('/tasks/open', [TaskController::class, 'indexOpen']);
Route::get('/tasks/done', [TaskController::class, 'indexDone']);
Route::delete('/tasks', [TaskController::class, 'destroyAll']);
