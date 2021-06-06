<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\NavalForces;

class NavalForcesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("backend.naval_forces", ['countrys' => Country::select('country_name', 'id', 'country_code')->get()]);
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
            "total_assets" => "required",
            "aircraft_carriers" => "required",
            "helicopter_carriers" => "required",
            "destroyers" => "required",
            "frigates" => "required",
            "corvettes" => "required",
            "submarines" => "required",
            "patrol_vessels" => "required",
            "mine_warfare" => "required",
            "naval_forces_notes" => "required"
        ]);
        $create = NavalForces::create([
            "country_id" => $request->country_id,
            "total_assets" => $request->total_assets,
            "aircraft_carriers" => $request->aircraft_carriers,
            "helicopter_carriers" => $request->helicopter_carriers,
            "destroyers" => $request->destroyers,
            "frigates" => $request->frigates,
            "corvettes" => $request->corvettes,
            "submarines" => $request->submarines,
            "patrol_vessels" => $request->patrol_vessels,
            "mine_warfare" => $request->mine_warfare,
            "notes" => $request->naval_forces_notes

        ]);

        if($create){
            return redirect()->back()->with('msg',"Naval Forces Create Successfully");
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
        //
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
        //
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
