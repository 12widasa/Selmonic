<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIUpdateRealtimeController;
use App\Http\Controllers\APIControlController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Daftarkan semua metode yang tersedia dalam controller
Route::apiResource('api-update-realtime', APIUpdateRealtimeController::class);


Route::get('api_control', [APIControlController::class, 'index']);
Route::get('api_control/{aPI_control}', [APIControlController::class, 'show']);
Route::put('/api_control', [APIControlController::class, 'update']);

// update data sensor 
Route::post("/updateSensor", [APIControlController::class, "updateSensor"]);

// route api ambil relay
Route::get("/data_relay/{relay}", [APIControlController::class, 'relay']);
