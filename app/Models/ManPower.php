<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManPower extends Model
{
    use HasFactory;
    protected $fillable = [
        "country_id",
        "total_population",
        "man_power",
        "fit_for_service",
        "reaching_mil_age_annually",
        "tot_military_personnel",
        "active_personnel",
        "reserve_personnel",
        "paramilitary",
        "notes",
    ];
    function country()
    {
        $this->belongsTo(Country::class, 'country_id');
    }
}
