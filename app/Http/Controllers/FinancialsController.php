<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Financials;

class FinancialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.financial', ['countrys' => Country::select('country_name', 'id', 'country_code')->get()]);
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
            "defense_budget" => "required",
            "external_debt" => "required",
            "foreign_exchange_gold" => "required",
            "purchaing_power_partiy" => "required",
            "financial_notes" => "required",
        ]);
        $financials_create = Financials::create([
            "country_id" => $request->country_id,
            "defense_budget" => $request->defense_budget,
            "external_debt" => $request->external_debt,
            "foreign_exchange_gold" => $request->foreign_exchange_gold,
            "purchasing_power_parity" => $request->purchaing_power_partiy,
            "notes" => $request->financial_notes
        ]);
        if($financials_create){
            return redirect()->back()->with('msg',"Financial Create Successfully");
        };

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
        return view('backend.edit_financial',['financials_edit' => Financials::find($id)]);
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
            "defense_budget" => "required",
            "external_debt" => "required",
            "foreign_exchange_gold" => "required",
            "purchaing_power_partiy" => "required",
            "financial_notes" => "required",
        ]);
        $financials_create = Financials::find($id)->update([
            "defense_budget" => $request->defense_budget,
            "external_debt" => $request->external_debt,
            "foreign_exchange_gold" => $request->foreign_exchange_gold,
            "purchasing_power_parity" => $request->purchaing_power_partiy,
            "notes" => $request->financial_notes
        ]);
        if($financials_create){
            return redirect()->route('country_details',$id);
        };
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
