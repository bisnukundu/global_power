<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Logistic;
use Illuminate\Http\Request;

class LogisticController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.logistic', ['countrys' => Country::select('country_name', 'id', 'country_code')->get()]);
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
            "labor_force" => "required",
            "marchant_marine_fleet" => "required",
            "ports_trade_terminals" => "required",
            "road_coverage" => "required",
            "railway_coverage" => "required",
            "airports" => "required",
            "logistic_note" => "required"
        ]);
       $logistic_create = Logistic::create([
            "country_id" => $request->country_id,
            "labor_force" => $request->labor_force,
            "marchant_marine_fleet" => $request->marchant_marine_fleet,
            "ports_trade_terminals" => $request->ports_trade_terminals,
            "roadway_coverage" => $request->road_coverage,
            "railway_coverage" => $request->railway_coverage,
            "airports" => $request->airports,
            "notes" => $request->logistic_note
        ]);

        if($logistic_create){
            return redirect()->back()->with('msg',"Logistic Create Successfully");
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
