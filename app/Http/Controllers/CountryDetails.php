<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryDetails extends Controller
{
    public function index($id){
        return view("backend.countryDetails",['country'=>Country::find($id)]);
    }
}
