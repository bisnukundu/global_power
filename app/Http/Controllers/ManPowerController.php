<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\ManPower;
use Illuminate\Http\Request;

class ManPowerController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("backend.manpower", ['countrys' => Country::select('country_name', 'id', 'country_code')->get()]);
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
            "total_popolation" => "required",
            "man_power" => "required",
            "fit_for_service" => "required",
            "reaching_mil_annually" => "required",
            "tot_military_personnel" => "required",
            "active_personnel" => "required",
            "reserve_personnel" => "required",
            "paramilitary" => "required",
            "manpower_notes" => "required"
        ]);
        $manpower_create = ManPower::create([
            "country_id" => $request->country_id,
            "total_population" => $request->total_popolation,
            "man_power" => $request->man_power,
            "fit_for_service" => $request->fit_for_service,
            "reaching_mil_age_annually" => $request->reaching_mil_annually,
            "tot_military_personnel" => $request->tot_military_personnel,
            "active_personnel" => $request->active_personnel,
            "reserve_personnel" => $request->reserve_personnel,
            "paramilitary" => $request->paramilitary,
            "notes" => $request->manpower_notes
        ]);
        if ($manpower_create) {
            return redirect()->back()->with('msg', "Man Power Create Successfully");
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
        return view('backend.edit_manpower',['edit_manpower'=>ManPower::find($id)]);
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
            "total_popolation" => "required",
            "man_power" => "required",
            "fit_for_service" => "required",
            "reaching_mil_annually" => "required",
            "tot_military_personnel" => "required",
            "active_personnel" => "required",
            "reserve_personnel" => "required",
            "paramilitary" => "required",
            "manpower_notes" => "required"
        ]);
        $manpower_create = ManPower::find($id)->update([
            "total_population" => $request->total_popolation,
            "man_power" => $request->man_power,
            "fit_for_service" => $request->fit_for_service,
            "reaching_mil_age_annually" => $request->reaching_mil_annually,
            "tot_military_personnel" => $request->tot_military_personnel,
            "active_personnel" => $request->active_personnel,
            "reserve_personnel" => $request->reserve_personnel,
            "paramilitary" => $request->paramilitary,
            "notes" => $request->manpower_notes
        ]);
        if ($manpower_create) {
            return redirect()->route('country_details',$id);
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
