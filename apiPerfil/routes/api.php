<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FrameworkController;

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


Route::resource('frameworks', FrameworkController::class);

Route::get('frameworks', [FrameworkController::class, 'index']);
Route::post('framework', [FrameworkController::class, 'store']);
Route::put('frameworks/{framework}', [FrameworkController::class, 'update']);

Route::get('profile', [ProfileController::class, 'show']);