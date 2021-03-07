<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{

    protected $table = "flights";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    protected $primaryKey = "flights_id";
    protected $fillable = [
        
        'flight_name',
        'origin',
        'destination',
        'date_hour',
        'passengers_quantity',
        'boarding_gate',
        'flight_state_id',
        'plane_routes_id'
    ];

    public $timestamps = false;

}
