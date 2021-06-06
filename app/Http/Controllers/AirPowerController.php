<?php

namespace App\Http\Controllers;

use App\Models\AirPower;
use App\Models\Country;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class AirPowerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.airepower',['countrys' => Country::select('country_name','id','country_code')->get()]);
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
        // dd($request->aircraft_strength);

        $request->validate([
            "aircraft_strength" => "required",
            "fighters" => "required",
            "dedicated_attack" => "required",
            "transports" => "required",
            "trainers" => "required",
            "special_mission" => "required",
            "tanker_fleet" => "required",
            "helicopter" => "required",
            "attack_helicopter" => "required",
            "airpower_notes" => "required",
            'country_id' =>"required"
        ]);
        $airpowerCreate = AirPower::create([
            'country_id' => $request->country_id,
            'total_aircraft_strength' => $request->aircraft_strength,
            'fighters/interceptors' => $request->fighters,
            'dedicated attack'=>$request->dedicated_attack,
            'transports'=>$request->transports,
            'trainers'=>$request->trainers,
            'special-mission'=>$request->special_mission,
            'tanker_fleet'=>$request->tanker_fleet,
            'helicopters'=>$request->helicopter,
            'attack_helicopters'=>$request->attack_helicopter,
            'notes'=>$request->airpower_notes,
        ]);
        if($airpowerCreate){
            return redirect()->back()->with('msg',"Air Power Create Successfully");
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

    }
}
