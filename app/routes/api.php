<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChargeStationController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post('/register',[AuthController::class,'register']);
Route::post('/login',[AuthController::class,'login']);
Route::get('/charge-station',[ChargeStationController::class,'index'])->name('chargeStation.index');
Route::post('/charge-station',[ChargeStationController::class,'store'])->name('chargeStation.store');

