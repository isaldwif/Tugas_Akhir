<?php

namespace App\Http\Livewire;

use App\Models\Problem;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Radars extends Component
{
    public $problems, $name, $date, $date_finish, $teknisi, $keterangan, $status;

    public function render()
    {
        $this->problems = Problem::where('name', Auth::user()->name)->get();

        return view('livewire.radars');
    }
}
