<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\LandForces;
use Illuminate\Http\Request;

class LandForcesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.landforces', ['countrys' => Country::select('country_name', 'id', 'country_code')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "country_id" => "required",
            "tanks" => "required",
            "armored_vehicles" => "required",
            "self_propelled_artillery" => "required",
            "towed_artillery" => "required",
            "rocket_projectors" => "required",
            "landforce_note" => "required"
        ]);
        $landforeces_create = LandForces::create([
            "country_id" => $request->country_id,
            "tanks" => $request->tanks,
            "armored_vehicles" => $request->armored_vehicles,
            'self_propelled_artillery' => $request->self_propelled_artillery,
            "towed_artillery" => $request->towed_artillery,
            "rocket_projectors" => $request->rocket_projectors,
            'notes' => $request->landforce_note,
        ]);

        if ($landforeces_create) {
            return redirect()->back()->with('msg', "Land Forces Create Successfully");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('backend.edit_landforces', ['edit_landforces' => LandForces::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            "tanks" => "required",
            "armored_vehicles" => "required",
            "self_propelled_artillery" => "required",
            "towed_artillery" => "required",
            "rocket_projectors" => "required",
            "landforce_note" => "required"
        ]);
        $landforeces_create = LandForces::find($id)->update([
            "tanks" => $request->tanks,
            "armored_vehicles" => $request->armored_vehicles,
            'self_propelled_artillery' => $request->self_propelled_artillery,
            "towed_artillery" => $request->towed_artillery,
            "rocket_projectors" => $request->rocket_projectors,
            'notes' => $request->landforce_note,
        ]);

        if ($landforeces_create) {
            return redirect()->route('country_details', $id);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
