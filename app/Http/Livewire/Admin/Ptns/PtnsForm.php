<?php

namespace App\Http\Livewire\Admin\Ptns;

use App\Models\Dataptn;
use Livewire\Component;

class PtnsForm extends Component
{
    public $name;
    public $statuspt;
    public $email;
    public $weblink;
    public $alamat;
    public $kontak;
    public $deskripsi;

    public function render()
    {
        return view('livewire.admin.ptns.ptns-form');
    }

    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|min:3|email',
        'weblink' => 'required|min:6|url',
        'alamat' => 'nullable|min:5',
        'kontak' => 'nullable|min:3|',
        'deskripsi' => 'nullable|min:10'
    ];

    public function store()
    {
        $this->validate();

        $ptnsStore = Dataptn::create([
            'nama_universitas' => $this->name,
            'statuspt' => $this->statuspt,
            'email' => $this->email,
            'weblink' => $this->weblink,
            'alamat' => $this->alamat,
            'kontak' => $this->kontak,
            'description' => $this->deskripsi
        ]);

        $this->emit('storePtns', $ptnsStore);
    }
}
