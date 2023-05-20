<?php

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
    return view('welcome');
});

Route::get('/tasks', [\App\Http\Controllers\TaskController::class, 'getAll']);
Route::get('/tasks/{task}', [\App\Http\Controllers\TaskController::class, 'get'])->whereNumber('task');
Route::post('/tasks', [\App\Http\Controllers\TaskController::class, 'create']);
Route::put('/tasks/{task}', [\App\Http\Controllers\TaskController::class, 'update'])->whereNumber('task');
Route::delete('/tasks/{task}', [\App\Http\Controllers\TaskController::class, 'delete'])->whereNumber('task');
