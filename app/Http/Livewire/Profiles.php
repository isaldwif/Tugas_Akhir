<?php

namespace App\Http\Livewire;

use App\Models\Profile;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Profiles extends Component
{
    public $profiles;
    public $ids, $name, $SAC, $SIC, $alamat, $penempatan, $latitude, $longtitude, $power_consume, $power_output, $coverage, $tahun_install, $tahun_comm, $merk, $negara, $type;

    public function render()
    {
        $this->profiles = Profile::where('name', Auth::user()->name)->get();

        return view('livewire.profiles');
    }

    public function resetInputFields()
    {
        $this->name = '';
        $this->SAC = '';
        $this->SIC = '';
        $this->alamat = '';
        $this->penempatan = '';
        $this->latitude = '';
        $this->longtitude = '';
        $this->power_consume = '';
        $this->power_output = '';
        $this->coverage = '';
        $this->tahun_install = '';
        $this->tahun_comm = '';
        $this->merk = '';
        $this->negara = '';
        $this->type = '';
    }

    public function detail($id)
    {
        $profile = Profile::where('id', $id)->first();
        $this->ids = $profile->id;
        $this->name = $profile->name;
        $this->SAC = $profile->SAC;
        $this->SIC = $profile->SIC;
        $this->alamat = $profile->alamat;
        $this->penempatan = $profile->penempatan;
        $this->latitude = $profile->latitude;
        $this->longtitude = $profile->longtitude;
        $this->power_consume = $profile->power_consume;
        $this->power_output = $profile->power_output;
        $this->coverage = $profile->coverage;
        $this->tahun_install = $profile->tahun_install;
        $this->tahun_comm = $profile->tahun_comm;
        $this->merk = $profile->merk;
        $this->negara = $profile->negara;
        $this->type = $profile->type;
    }

    public function update()
    {
        $this->validate([
            'name' => 'required',
            'SAC' => 'required|integer',
            'SIC' => 'required|integer',
            'alamat' => 'required',
            'penempatan' => 'required',
            'latitude' => 'required',
            'longtitude' => 'required',
            'power_consume' => 'required|numeric',
            'power_output' => 'required|numeric',
            'coverage' => 'required|integer',
            'tahun_install' => 'required|integer',
            'tahun_comm' => 'required|integer',
            'merk' => 'required',
            'negara' => 'required',
            'type' => 'required',
        ]);

        if ($this->ids) {
            $profile = profile::find($this->ids);
            $profile->update([
                'name' => $this->name,
                'SAC' => $this->SAC,
                'SIC' => $this->SIC,
                'alamat' => $this->alamat,
                'penempatan' => $this->penempatan,
                'latitude' => $this->latitude,
                'longtitude' => $this->longtitude,
                'power_consume' => $this->power_consume,
                'power_output' => $this->power_output,
                'coverage' => $this->coverage,
                'tahun_install' => $this->tahun_install,
                'tahun_comm' => $this->tahun_comm,
                'merk' => $this->merk,
                'negara' => $this->negara,
                'type' => $this->type
            ]);
            session()->flash('message', 'Profile updated Successfully');
            return redirect()->route('my_profile');
        }
    }
}
