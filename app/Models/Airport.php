<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{

    protected $table = "airport";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    protected $primaryKey = "id";
    protected $fillable = [
        
        'airpot_name',
        
    ];

    public $timestamps = false;

}
