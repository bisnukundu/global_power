<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logistic extends Model
{
    use HasFactory;
    protected $fillable = [
        "country_id",
        "labor_force",
        "marchant_marine_fleet",
        "ports_trade_terminals",
        "roadway_coverage",
        "railway_coverage",
        "airports",
        "notes",
    ];
    function country()
    {
        $this->belongsTo(Country::class, 'country_id');
    }
}
