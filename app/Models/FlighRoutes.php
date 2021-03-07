<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class FlighRoutes extends Model
{

    protected $table = "flights_routes";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $primaryKey = "plane_routes_id";

    protected $fillable = [
		'plane_id',
		'rutas_idrutas',
    ];

    public $timestamps = false;
    
}
