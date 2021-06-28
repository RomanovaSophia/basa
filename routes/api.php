<?php

use App\Http\Controllers\RecordController;
use App\Http\Controllers\ReviewController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;

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

Route::get('/services', [ServiceController::class, 'index']);
Route::get('/records', [RecordController::class, 'show']);
Route::post('/record', [RecordController::class, 'store']);
Route::get('/reviews', [ReviewController::class, 'show']);
