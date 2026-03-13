<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChargeStationController;
use App\Http\Controllers\ReservationController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::middleware('auth:sanctum')->group(function(){
    Route::get('/charge-station',[ChargeStationController::class,'index'])->name('chargeStation.index');
    Route::post('/charge-station',[ChargeStationController::class,'store'])->name('chargeStation.store');
    Route::get('/reservation',[ReservationController::class,'index'])->name('reservation.index');
    Route::post('/reservation',[ReservationController::class,'store'])->name('reservation.store');
    Route::get('/charge-station/{chargeStation}',[ChargeStationController::class,'show'])->name('chargeStation.show');
    Route::patch('/charge-station/{chargeStation}',[ChargeStationController::class,'update'])->name('chargestation.update');
});


Route::post('/register',[AuthController::class,'register']);
Route::post('/login',[AuthController::class,'login']);
;
