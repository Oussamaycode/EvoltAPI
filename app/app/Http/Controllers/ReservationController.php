<?php

namespace App\Http\Controllers;

use App\Models\reservation;
use App\Http\Requests\StorereservationRequest;
use App\Http\Requests\UpdatereservationRequest;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservations=Reservation::where('user_id',auth()->user()->id)->get();
        return response()->json(['reservations'=>$reservations],200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorereservationRequest $request)
    {
        $reservation=Reservation::create(['reservation_time'=>$request->reservation_time,'user_id'=>auth()->user()->id,'charge_station_id'=>$request->charge_station_id]);
        return response()->json(['reservation'=>$reservation],201);
    }

    /**
     * Display the specified resource.
     */
    public function show(reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatereservationRequest $request, reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(reservation $reservation)
    {
        //
    }
}
