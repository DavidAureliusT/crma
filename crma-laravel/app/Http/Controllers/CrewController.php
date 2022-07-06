<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\BloodType;
use App\Models\Certivicate;
use App\Models\District;
use App\Models\Gender;
use App\Models\Licence;
use App\Models\Province;
use App\Models\Regency;
use App\Models\Religion;
use App\Models\Village;
use Illuminate\Http\Request;

class CrewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("crews.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("crews.create", [
            'genders'       => Gender::get(),
            'licences'      => Licence::get(),
            'certificates'  => Certivicate::get(),
            'religions'     => Religion::get(),
            'bloodTypes'    => BloodType::get(),
            'banks'         => Bank::get(),
            'provinces'     => Province::get(),
            'regencies'     => Regency::get(),
            'districts'     => District::get(),
            'villages'       => Village::get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view("crews.show");
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
