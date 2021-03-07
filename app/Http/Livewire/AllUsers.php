<?php

namespace App\Http\Livewire;

use App\Models\Profile;
use Livewire\Component;
use Livewire\WithPagination;

class AllUsers extends Component
{
    public $searchTerm;

    public $ids, $name, $SAC, $SIC, $alamat, $penempatan, $latitude, $longtitude, $power_consume, $power_output, $coverage, $tahun_install, $tahun_comm, $merk, $negara, $type;

    use WithPagination;
    public function render()
    {
        $searchTerm = '%' . $this->searchTerm . '%';
        $profiles = Profile::where('id', 'LIKE', $searchTerm)
            ->orWhere('name', 'LIKE', $searchTerm)
            ->orWhere('SAC', 'LIKE', $searchTerm)
            ->orWhere('SIC', 'LIKE', $searchTerm)
            ->orderBy('name', 'ASC')->paginate(5);

        return view('livewire.all-users', ['profiles' => $profiles]);
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
}
