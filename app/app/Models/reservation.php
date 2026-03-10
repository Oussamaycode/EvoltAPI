<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{
    /** @use HasFactory<\Database\Factories\ReservationFactory> */
    use HasFactory;

    protected $fillable=['reservation_time','user_id','charge_station_id'];

    public function chargeStation(){
        $this->belongsTo(chargeStation::class);
    }

    public function user(){
        $this->belongsTo(user::class);
    }
}
