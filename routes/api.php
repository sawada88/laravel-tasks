<?php

use App\Http\Controllers\API\v1\AccessController;
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

 // ウィジェット
Route::controller(AccessController::class)->prefix('/v1/data')->group(function () {
    Route::post('/data', 'getData');
});
