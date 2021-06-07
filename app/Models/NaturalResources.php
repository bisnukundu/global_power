<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NaturalResources extends Model
{
    use HasFactory;
    protected $fillable = [
        "country_id",
        "oil_production",
        "oil_consumption",
        "oil_proven_reserves",
        "notes",
    ];
    function country()
    {
       return $this->belongsTo(Country::class, 'country_id');
    }
}
