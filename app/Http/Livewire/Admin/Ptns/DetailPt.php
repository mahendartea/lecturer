<?php

namespace App\Http\Livewire\Admin\Ptns;

use Livewire\Component;

class DetailPt extends Component
{
    public $namaUniv;
    public $emailUniv;
    public $weblink;
    public $alamat;
    public $kontak;
    public $description;
    protected $listeners = ['toDetailPT' => 'showDetailPtnya'];

    public function showDetailPtnya($detailPt)
    {
        $this->namaUniv = $detailPt['nama_universitas'];
        $this->emailUniv = $detailPt['email'];
        $this->weblink = $detailPt['weblink'];
        $this->alamat = $detailPt['alamat'];
        $this->kontak = $detailPt['kontak'];
        $this->description = $detailPt['description'];
    }

    public function render()
    {
        return view('livewire.admin.ptns.detail-pt');
    }
}
