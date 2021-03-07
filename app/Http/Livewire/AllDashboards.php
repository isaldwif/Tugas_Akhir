<?php

namespace App\Http\Livewire;

use App\Models\Problem;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class AllDashboards extends Component
{
    public $problems;
    public $ids, $name, $date_finish, $date, $teknisi, $keterangan, $status, $kondisi;


    public function render()
    {
        $this->problems = DB::table('users')
            ->join('problems', 'users.name', '=', 'problems.name')
            ->select('users.*', 'problems.*')
            ->orderBy('problems.name', 'ASC')
            ->get();

        return view('livewire.all-dashboards');
    }

    public function resetInputFields()
    {
        $this->name = '';
        $this->date = '';
        $this->date_finish = '';
    }

    public function detail($id)
    {
        $problem = Problem::where('id', $id)->first();
        $this->ids = $problem->id;
        $this->name = $problem->name;
        $this->date = $problem->date;
        $this->date_finish = $problem->date_finish;
    }
}
