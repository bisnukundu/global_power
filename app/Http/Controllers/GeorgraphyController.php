<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Georgraphy;
use Illuminate\Http\Request;

class GeorgraphyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.geography', ['countrys' => Country::select('country_name', 'id', 'country_code')->get()]);
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
            "square_land_area" => "required",
            "coastline_coverage" => "required",
            "shared_borders" => "required",
            "waterways_usable" => "required",
            "geography_note" => "required"
        ]);
        $geography_create = Georgraphy::create([
            "country_id" => $request->country_id,
            "square_land_area" => $request->square_land_area,
            "coastline_coverage" => $request->coastline_coverage,
            "shared_borders" => $request->shared_borders,
            "waterways_usable" => $request->waterways_usable,
            "notes" => $request->geography_note,
        ]);
        if($geography_create){
            return redirect()->back()->with('msg',"Geography Create Successfully");
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
        return view('backend.edit_geography',['edit_geography' => Georgraphy::find($id)]);
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

            "square_land_area" => "required",
            "coastline_coverage" => "required",
            "shared_borders" => "required",
            "waterways_usable" => "required",
            "geography_note" => "required"
        ]);
        $geography_create = Georgraphy::find($id)->update([
            "square_land_area" => $request->square_land_area,
            "coastline_coverage" => $request->coastline_coverage,
            "shared_borders" => $request->shared_borders,
            "waterways_usable" => $request->waterways_usable,
            "notes" => $request->geography_note,
        ]);
        if($geography_create){
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
