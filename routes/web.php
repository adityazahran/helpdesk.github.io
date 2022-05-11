<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TicketsController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', HomeController::class);
Route::get('ticket', [TicketsController::class, 'index']);
Route::get('ticket/create', [TicketsController::class, 'create']);
Route::post('ticket/create', [TicketsController::class, 'store']);
Route::view('ticket/search', 'tickets/search');
Route::get('ticket/{id}/edit', [TicketsController::class, 'edit']);
Route::put('ticket/{id}', [TicketsController::class, 'update']);
Route::delete('ticket/{id}', [TicketsController::class, 'destroy']);