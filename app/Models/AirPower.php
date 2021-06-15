<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AirPower extends Model
{
    use HasFactory;
    protected $fillable = [
        "country_id",
        "total_aircraft_strength",
        "transports",
        "trainers",
        "special",
        "tanker_fleet",
        "helicopters",
        "fighters_interceptors",
        "dedicated_attack",
        "attack_helicopters",
        "notes",
        'special_mission',
    ];
    function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }
}
