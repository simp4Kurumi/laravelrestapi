<?php

use App\Http\Controllers\Api\HumanController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::apiResource('humans',HumanController::class);

/*Route::group(
    ["namespace"=>"App\Http\Controller"],
    function(){
        Route::apiResource("people", HumanController::class);
    }
);*/

Route::get('/Tatara/310831/people', [HumanController::class, 'index']);
Route::get('/Tatara/310831/people/{human}' ,[HumanController::class, 'show']);
Route::delete('/Tatara/310831/people/{human}',[HumanController::class, 'destroy']);
Route::post('/Tatara/310831/people/{human}',[HumanController::class, 'store']);
Route::put('/Tatara/310831/people/{human}',[HumanController::class, 'update']);
