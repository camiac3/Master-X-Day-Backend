<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class FlightState extends Model
{

    protected $table = "flight_state";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'state',
    ];
    
}
