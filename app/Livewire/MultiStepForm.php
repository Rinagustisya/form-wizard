<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use App\Models\Village;
use App\Models\DataPenduduk;
use Livewire\WithFileUploads;
use Illuminate\Http\Request;
use Alert;
class MultiStepForm extends Component
{
    use WithFileUploads;

    public $nama_lengkap;
    public $no_telp;
    public $nik;
    public $provinsi;
    public $kabupaten;
    public $kecamatan;
    public $kelurahan;
    public $alamat;
    public $tempat_lahir;
    public $tgl_lahir;
    public $jenis_kelamin;
    public $no_paspor;
    public $nama_ayah;
    public $nama_ibu;
    public $foto;
    public $username;
    public $email;
    public $kode_ID;


    public $totalSteps = 4;
    public $currentStep = 1;

    public $step1Completed = false;
    public $step2Completed = false;
    public $step3Completed = false;
    public $step4Completed = false;

    public function mount() {
        $this->currentStep= 1;
    }

    public function render()
    {
        $provinces = Province::all();
        $regencies = Regency::all();
        $districts = District::all();
        $villages = Village::all();

        return view('livewire.multi-step-form',compact('provinces', 'regencies', 'districts', 'villages'));
    }

    public function decreaseStep(){
        $this->resetErrorBag(); 
        $this->currentStep--;
        if($this->currentStep < 1){
            $this->currentStep = 1;
        }
    }

    public function increaseStep(){
        $this->resetErrorBag();
        $this->validateData();
        $this->updateStepStatus();
        $this->currentStep++;
        if($this->currentStep > $this->totalSteps){
            $this->currentStep = $this->totalSteps;
        }
    }
    
    public function updateStepStatus() {
        switch ($this->currentStep) {
            case 1:
                $this->step1Completed = true;
                break;
            case 2:
                $this->step2Completed = true;
                break;
            case 3:
                $this->step3Completed = true;
                break;
            case 4:
                $this->step4Completed = true;
                break;
            default:
                break;
        }
    }

    public function validateData(){
        if ($this->currentStep == 1) {
            $this->validate([
                'nama_lengkap' => 'required|string',
                'no_telp' => 'required|digits:12',
                'nik' => 'required|digits:16',
                'provinsi' => 'required|string',
                'kabupaten' => 'required|string',
                'kecamatan' => 'required|string',
                'kelurahan' => 'required|string',
                'alamat' => 'required|string',
                'tempat_lahir' => 'required',
                'tgl_lahir' => 'required',
                'jenis_kelamin' => 'required',
                'no_paspor' => 'nullable',
            ]);

        } elseif ($this->currentStep == 2) {
            $this->validate([
                'nama_ayah' => 'required|string',
                'nama_ibu' => 'required|string'
            ]);

        } elseif ($this->currentStep == 3){
            $this->validate([
                'foto' => 'required|mimes:png,jpg,jpeg'
            ]);
        }
    
    }

    public function register() {
        $this->resetErrorBag();
        if($this->currentStep == 4) {
            $this->validate([
                'username' => 'required|string',
                'email' => 'required|email|unique:data_penduduks',
                'kode_ID' => 'required'
            ]);
        }

        $filename = 'foto'.$this->foto->getClientOriginalName();
        $upload_foto = $this->foto->storeAs('public/data_foto', $filename);

        if ($upload_foto) {
            $values = array (
                'nama_lengkap' => $this->nama_lengkap,
                'no_telp' => $this->no_telp,
                'nik' => $this->nik,
                'provinsi' => $this->provinsi,
                'kabupaten' => $this->kabupaten,
                'kecamatan' => $this->kecamatan,
                'kelurahan' => $this->kelurahan,
                'alamat' => $this->alamat,
                'tempat_lahir' => $this->tempat_lahir,
                'tgl_lahir' => $this->tgl_lahir,
                'jenis_kelamin' => $this->jenis_kelamin,
                'no_paspor' => $this->no_paspor,
                'nama_ayah' => $this->nama_ayah,
                'nama_ibu' => $this->nama_ibu,
                'username' => $this->username,
                'email' => $this->email,
                'kode_ID' => $this->kode_ID,
                'foto' => $filename,
            );
        }

        DataPenduduk::create($values);
        Alert::success('Success!', 'Data Berhasil Dikirim!');
        return redirect()->route('form');
        // $this->reset();
        // $this->currentStep = 1;
    }

    
}
