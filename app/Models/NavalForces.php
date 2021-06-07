<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NavalForces extends Model
{
    use HasFactory;
    protected $fillable = [
        "country_id",
        "total_assets",
        "aircraft_carriers",
        "helicopter_carriers",
        "destroyers",
        "frigates",
        "corvettes",
        "submarines",
        "patrol_vessels",
        "mine_warfare",
        "notes",
    ];
    function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }
}
