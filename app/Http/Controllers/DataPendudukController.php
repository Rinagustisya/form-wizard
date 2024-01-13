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

        $option = "<option>Pilih Kabupaten...</option>";
        foreach($kabupaten as $kab) {
            $option.= "<option value='$kab->id'>$kab->name</option>";
        }
        echo $option;
    }

    public function getKecamatan(request $request){
        $id_kabupaten = $request->id_kabupaten;

        $kecamatan = District::where('regency_id', $id_kabupaten)->get();

        $option = "<option>Pilih Kecamatan...</option>";
        foreach($kecamatan as $kec) {
            $option.= "<option value='$kec->id'>$kec->name</option>";
        }

        echo $option;
    }

    public function getDesa(request $request){
        $id_kecamatan = $request->id_kecamatan;

        $desa = Village::where('district_id', $id_kecamatan)->get();

        $option = "<option>Pilih Kelurahan...</option>";
        foreach($desa as $des) {
            $option .= "<option value='$des->id'>$des->name</option>";
        }
        echo $option;
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
