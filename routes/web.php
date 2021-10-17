<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoutesController;

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


Auth::routes();

Route::get('/', [RoutesController::class, 'index']);
Route::get('/create-task', [RoutesController::class, 'store']);
Route::get('/delete/{id}', [RoutesController::class, 'destroy']);
Route::get('/edit/{id}', [RoutesController::class, 'edit']);
Route::get('/update/{id}', [RoutesController::class, 'update']);

