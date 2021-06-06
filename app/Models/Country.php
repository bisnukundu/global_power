<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $fillable = ['country_name', 'country_code', 'country_title', 'country_description'];
    public function logistic()
    {
        return $this->hasOne(Logistic::class, 'country_id');
    }
    public function financials()
    {
        return $this->hasOne(Financials::class, 'country_id');
    }
    public function airPower()
    {
        return $this->hasOne(AirPower::class, 'country_id');
    }
    public function georgraphy()
    {
        return $this->hasOne(Georgraphy::class, 'country_id');
    }
    public function landForces()
    {
        return $this->hasOne(LandForces::class, 'country_id');
    }
    public function manPower()
    {
        return $this->hasOne(manpower::class, 'country_id');
    }
    public function naturalResources()
    {
        return $this->hasOne(NaturalResources::class, 'country_id');
    }
    public function navalForces()
    {
        return $this->hasOne(NaturalResources::class, 'country_id');
    }
}
