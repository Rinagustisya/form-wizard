<?php

namespace App\Http\Controllers;
use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use App\Models\Village;
use App\Models\DataPenduduk;
use Illuminate\Http\Request;
use Termwind\Components\Raw;
use Illuminate\Support\Facades\Storage;
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

    public function getKabupaten(Request $request)
    {
        $provinsiName = $request->provinsiName;
    
        $provinsi = Province::where('name', $provinsiName)->first();
    
        if (!$provinsi) {
            return response()->json(['error' => 'Provinsi not found'], 404);
        }
    
        $kabupaten = Regency::where('province_id', $provinsi->id)->get();
    
        $option = "<option value=''>Pilih Kabupaten...</option>";
        foreach ($kabupaten as $kab) {
            $option .= "<option value='$kab->name'>$kab->name</option>";
        }
    
        echo $option;
    }
    
    public function getKecamatan(Request $request)
    {
        $kabupatenName = $request->kabupatenName;
    
        $kabupaten = Regency::where('name', $kabupatenName)->first();
    
        if (!$kabupaten) {
            return response()->json(['error' => 'Kabupaten not found'], 404);
        }
    
        $kecamatan = District::where('regency_id', $kabupaten->id)->get();
    
        $option = "<option value=''>Pilih Kecamatan...</option>";
        foreach ($kecamatan as $kec) {
            $option .= "<option value='$kec->name'>$kec->name</option>";
        }
    
        echo $option;
    }
    
    public function getDesa(Request $request)
    {
        $kecamatanName = $request->kecamatanName;
    
        $kecamatan = District::where('name', $kecamatanName)->first();
    
        if (!$kecamatan) {
            return response()->json(['error' => 'Kecamatan not found'], 404);
        }
    
        $desa = Village::where('district_id', $kecamatan->id)->get();
    
        $option = "<option value=''>Pilih Kelurahan...</option>";
        foreach ($desa as $des) {
            $option .= "<option value='$des->name'>$des->name</option>";
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
    public function show(Request $request)
    {
        $queryId = $request->query('id');
        $id = DataPenduduk::find($queryId);
        return view('admin.show-data', ['row'=>$id]);
    }

    public function showGambar($filename = null)
    {
        if ($filename === null) {
            abort(404);
        }
    
        $path = 'public/data_foto/' . $filename; // Corrected path concatenation
        $filePath = storage_path('app/' . $path); // Corrected path concatenation
    
        if (Storage::exists($path)) {
            $fileContents = file_get_contents($filePath);
            return response($fileContents)->header('Content-Type', 'image/jpeg/jpg/png');
        }
    
        abort(404);
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
