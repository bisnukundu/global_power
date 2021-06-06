<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\NaturalResources;
use Illuminate\Http\Request;

class NaturalResourcesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("backend.natur_resourch", ['countrys' => Country::select('country_name', 'id', 'country_code')->get()]);
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
            "oil_production" => "required",
            "oil_consumption" => "required",
            "oil_proven_reserves" => "required",
            "airpower_notes" => "required"
        ]);

        $create = NaturalResources::create([
            "country_id" => $request->country_id,
            "oil_production" => $request->oil_production,
            "oil_consumption" => $request->oil_consumption,
            "oil_proven_reserves" => $request->oil_proven_reserves,
            "notes" => $request->airpower_notes
        ]);

        if($create){
            return redirect()->back()->with("msg","Natural Resources Create Successfully");
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
