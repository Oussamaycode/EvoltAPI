<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chargeStation extends Model
{
    /** @use HasFactory<\Database\Factories\ChargeStationFactory> */
    use HasFactory;

    protected $fillable=['name','chargerType'];
}
