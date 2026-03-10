<?php

namespace App\Http\Controllers;

use App\Models\chargeStation;
use App\Http\Requests\StorechargeStationRequest;
use App\Http\Requests\UpdatechargeStationRequest;

class ChargeStationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $chargeStations=ChargeStation::all();
        return json(['chargeStations'=>$chargeStations],200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorechargeStationRequest $request)
    {
        $chargeStation::create(['name'=>$request->name,'chargerType'=>$chargerType]);
        return json(['chargeStation'=>$chargeStation],201);
    }

    /**
     * Display the specified resource.
     */
    public function show(chargeStation $chargeStation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatechargeStationRequest $request, chargeStation $chargeStation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(chargeStation $chargeStation)
    {
        //
    }
}
