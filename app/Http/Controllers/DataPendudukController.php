<?php

namespace App\Http\Controllers;
use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use App\Models\Village;

use Illuminate\Http\Request;
use Termwind\Components\Raw;

class DataPendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $provinces = Province::all();
        $regencies = Regency::all();
        $districts = District::all();
        $villages = Village::all();

        return view('register',compact('provinces', 'regencies', 'districts', 'villages'));
    }

    public function getKabupaten(request $request){
        $id_provinsi = $request->id_provinsi;

        $kabupaten = Regency::where('province_id', $id_provinsi)->get();

        foreach($kabupaten as $kab) {
            echo "<option value='$kab->id'>$kab->name</option>";
        }
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
