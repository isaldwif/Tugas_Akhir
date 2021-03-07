<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Problem;
use Illuminate\Support\Facades\Auth;

class Problems extends Component
{
    public $problems;
    public $ids, $name, $date, $date_finish, $teknisi, $keterangan, $status, $kondisi;

    public function render()
    {
        // QUERY mendapatkan table problem yang diurutkan berdasarkan 'created_at' === 2
        // $this->problems = Problem::orderBy('created_at', 'DESC')->get();
        $this->problems = Problem::where('name', Auth::user()->name)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('livewire.problems');
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

    public function store()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'date' => 'required|date',
            'teknisi' => 'required',
            'keterangan' => 'required',
            'kondisi' => 'required'
        ]);

        Problem::create($validatedData);
        session()->flash('message', 'Failed Operasi');
        $this->resetInputFields();
        return redirect()->route('problem');
    }

    public function store1()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'date_finish' => 'required|date',
            'teknisi' => 'required',
            'keterangan' => 'required',
            'status' => 'required',
        ]);

        Problem::create($validatedData);
        session()->flash('message', 'Normal Operasi');
        $this->resetInputFields();
        return redirect()->route('problem');
    }

    public function store2()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'date' => 'required|date',
            'date_finish' => 'required|date',
            'teknisi' => 'required',
            'status' => 'required',
        ]);

        Problem::create($validatedData);
        session()->flash('message', 'Problem has been Finished');
        $this->resetInputFields();
        return redirect()->route('problem');
    }

    public function edit($id)
    {
        $problem = Problem::where('id', $id)->first();
        $this->ids = $problem->id;
        $this->name = $problem->name;
        $this->date = $problem->date;
        $this->teknisi = $problem->teknisi;
        $this->keterangan = $problem->keterangan;
    }

    public function update()
    {
        $this->validate([
            'name' => 'required',
            'date' => 'required',
            'teknisi' => 'required',
            'keterangan' => 'required'
        ]);

        if ($this->ids) {
            $problem = Problem::find($this->ids);
            $problem->update([
                'name' => $this->name,
                'date' => $this->date,
                'teknisi' => $this->teknisi,
                'keterangan' => $this->keterangan
            ]);
            session()->flash('message', 'Problem updated Successfully');
            $this->resetInputFields();
            return redirect()->route('problem');
        }
    }
}
