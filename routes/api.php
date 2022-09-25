<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\HobbyController;
use App\Http\Controllers\API\TraumaController;
use App\Http\Controllers\API\EfficacyController;
use App\Http\Controllers\API\FbFollowerController;

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

Route::prefix('v1')->group(function () {
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);

    // FB FOLLOWER ROUTE
    Route::get('/fb-follower', [FbFollowerController::class, 'getFbFollower']);
    // HOBBY ROUTE
    Route::get('/hobby', [HobbyController::class, 'getHobby']);

    Route::group(['middleware' => 'auth:sanctum'], function () {

        Route::get('efficacy-test', [EfficacyController::class, 'efficacyTestQuestion']);

        Route::get('trauma-test', [TraumaController::class, 'traumaTestQuestion']);

        Route::post('/logout', [AuthController::class, 'logout']);
    });


    Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
        return $request->user();
    });
});
