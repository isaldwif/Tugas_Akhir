<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class AllRadars extends Component
{
    public $problems;
    public $ids, $name, $date, $date_finish, $teknisi, $keterangan, $status, $kondisi;

    public function render()
    {
        $this->problems = DB::table('users')
            ->join('problems', 'users.name', '=', 'problems.name')
            ->select('users.*', 'problems.*')
            ->orderBy('problems.created_at', 'ASC')
            ->get();

        return view('livewire.all-radars');
    }
}
