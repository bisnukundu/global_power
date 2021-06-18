<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\ManPower;
use Illuminate\Http\Request;

class Total_population extends Controller
{
    public function index(){
        return view('frontend.total_population',["totalPopulations"=>ManPower::all(),"maxPopulation"=>ManPower::max('total_population')]);
    }
}
