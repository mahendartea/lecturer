<?php

namespace App\Http\Livewire\Admin\Ptns;

use App\Models\Dataptn;
use Livewire\Component;

class PtnsEdit extends Component
{
    public $idPt;
    public $name;
    public $statuspt;
    public $email;
    public $weblink;
    public $alamat;
    public $deskripsi;
    public $kontak;

    protected $listeners = [
        'toFormEdit' => 'viewEditPt',
    ];

    public function render()
    {
        return view('livewire.admin.ptns.ptns-edit');
    }

    public function viewEditPt($dataEditPt)
    {
        $this->idPt = $dataEditPt['id'];
        $this->name = $dataEditPt['nama_universitas'];
        $this->statuspt = $dataEditPt['statuspt'];
        $this->email = $dataEditPt['email'];
        $this->weblink = $dataEditPt['weblink'];
        $this->alamat = $dataEditPt['alamat'];
        $this->deskripsi = $dataEditPt['description'];
        $this->kontak = $dataEditPt['kontak'];
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
        $ptUpdate = [
            'nama_universitas' => $this->name,
            'statuspt' => $this->statuspt,
            'email' => $this->email,
            'weblink' => $this->weblink,
            'alamat' => $this->alamat,
            'kontak' => $this->kontak,
            'description' => $this->deskripsi
        ];

        $updatePt = Dataptn::find($this->idPt)->update($ptUpdate);
        if ($updatePt) {
            $this->emit('UpdatedPtE', $ptUpdate);
        }
    }
}
