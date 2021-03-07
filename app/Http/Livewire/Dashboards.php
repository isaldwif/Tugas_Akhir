<?php

namespace App\Http\Livewire;

use App\Models\Problem;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Dashboards extends Component
{
    public $problems;

    public function render()
    {
        $this->problems = Problem::where('name', Auth::user()->name)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('livewire.dashboards');
    }
}
