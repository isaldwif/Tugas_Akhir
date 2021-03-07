<?php

namespace App\Http\Livewire;

use App\Models\Problem;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class AllProblems extends Component
{
    public $problems;
    public $ids, $name, $date, $teknisi, $keterangan, $status, $kondisi;


    public function render()
    {
        $this->problems = DB::table('users')
            ->join('problems', 'users.name', '=', 'problems.name')
            ->select('users.*', 'problems.*')
            ->get();

        return view('livewire.all-problems');
    }

    public function resetInputFields()
    {
        $this->name = '';
        $this->date = '';
        $this->date_finish = '';
        $this->teknisi = '';
        $this->keterangan = '';
        $this->kondisi = '';
    }

    public function confirm($id)
    {
        $problem = Problem::where('id', $id)->first();
        $this->ids = $problem->id;
        $this->name = $problem->name;
        $this->date = $problem->date;
        $this->teknisi = $problem->teknisi;
        $this->keterangan = $problem->keterangan;
        // $this->kondisi = $problem->kondisi;
    }

    public function update()
    {
        $this->validate([
            'name' => 'required',
            'date' => 'required',
            'teknisi' => 'required',
            'keterangan' => 'required',
            'kondisi' => 'required',
        ]);

        if ($this->ids) {
            $problem = Problem::find($this->ids);
            $problem->update([
                'name' => $this->name,
                'date' => $this->date,
                'teknisi' => $this->teknisi,
                'keterangan' => $this->keterangan,
                'kondisi' => $this->kondisi,
            ]);
            session()->flash('message', 'Radar Normal Operasi');
            $this->resetInputFields();
            return redirect()->route('all_problem');
        }
    }
}
