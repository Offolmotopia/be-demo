<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

Route::middleware('api')->get('contacts', [ContactController::class, 'index']);
Route::middleware('api')->post('contacts', [ContactController::class, 'store']);
Route::middleware('api')->delete('contacts/{id}',[ContactController::class, 'destroy']);
Route::middleware('api')->put('contacts/{id}',[ContactController::class, 'update']);
