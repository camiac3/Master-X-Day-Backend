<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class FlightState extends Model
{

    protected $table = "fligths_states";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'current_state',
    ];
    
}
