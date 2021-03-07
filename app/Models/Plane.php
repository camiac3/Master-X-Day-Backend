<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plane extends Model
{

    protected $table = "plane";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    protected $primaryKey = "plane_id";
    protected $fillable = [
        
        'plane_name',
        
    ];

    public $timestamps = false;

}
