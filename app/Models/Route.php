<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use App\Models\Airport;

class Route extends Model
{

    protected $table = "routes";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $primaryKey = "plane_routes_id";

    protected $fillable = [
		'aeropuerto_id_origen',
		'aeropuerto_id_destino',
    ];
    public function getAirportOrigin()
    {
        return $this->belongsTo(Airport::class, 'aeropuerto_id_origen');
    }

    public function getAirportDestination()
    {
        return $this->belongsTo(Airport::class, 'aeropuerto_id_destino');
    }

    public $timestamps = false;
}
