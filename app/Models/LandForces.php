<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LandForces extends Model
{
    use HasFactory;
    protected $fillable = [
        "country_id",
        "tanks",
        "armored_vehicles",
        "self_propelled_artillery",
        "towed_artillery",
        "rocket_projectors",
        "notes",
    ];
    function country()
    {
        $this->belongsTo(Country::class, 'country_id');
    }
}
