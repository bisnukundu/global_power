<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Georgraphy extends Model
{
    use HasFactory;
    protected $fillable = [
        "country_id",
        "square_land_area",
        "coastline_coverage",
        "shared_borders",
        "waterways_usable",
        "notes",
    ];
    function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }
}
