<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ListController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\StatusController;
use App\Http\Controllers\Api\CampaignController;
use App\Http\Controllers\Api\Auth\AuthController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


// Group route by middleware
Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::apiResource('/users', UserController::class);
Route::apiResource('/status', StatusController::class);
Route::apiResource('/campaign', CampaignController::class);
Route::apiResource('/list', ListController::class);
});

// Ressources api route



Route::post('/auth', [AuthController::class, 'authenticate']);
