<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Financials extends Model
{
    use HasFactory;
    protected $fillable = [
        "country_id",
        "defense_budget",
        "external_debt",
        "foreign_exchange_gold",
        "purchasing_power_parity",
        "notes",
    ];
    function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }
}
