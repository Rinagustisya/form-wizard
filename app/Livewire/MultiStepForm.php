<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use App\Models\Village;
use App\Models\DataPenduduk;
use Livewire\WithFileUploads;

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
        $this->currentStep--;
        if($this->currentStep < 1){
            $this->currentStep = 1;
        }
    }

    public function increaseStep(){
        $this->currentStep++;
        if($this->currentStep > $this->totalSteps){
            $this->currentStep = $this->totalSteps;
        }
    }
}
