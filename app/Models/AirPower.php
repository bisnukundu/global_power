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
        "fighters/interceptors",
        "dedicated attack",
        "attack_helicopters",
        "notes",
        'special-mission',
    ];
    function country()
    {
        $this->belongsTo(Country::class, 'country_id');
    }
}
