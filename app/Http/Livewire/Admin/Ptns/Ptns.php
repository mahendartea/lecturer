<?php

namespace App\Http\Livewire\Admin\Ptns;

use Livewire\Component;

class Ptns extends Component
{
    public $ptnsStatus = 1;

    protected $listeners = [
        'successDetelePt' => 'SendMessageDeletePt',
        'detailPT' => 'viewDetailPt',
        'storePtns' => 'ptnsStored',
        'editPtE' => 'viewEditPt',
        'UpdatedPtE' => 'PtUpdated'
    ];

    public function render()
    {
        return view('livewire.admin.ptns.ptns');
    }

    public function ptnsIndex()
    {
        $this->ptnsStatus = 1;
    }

    public function ptnsNegeri()
    {
        $this->ptnsStatus = 2;
    }

    public function ptnsSwasta()
    {
        $this->ptnsStatus = 3;
    }

    public function addPtns()
    {
        $this->ptnsStatus = 4;
    }

    public function ptnsStored($ptnsStore)
    {
        $this->ptnsStatus = 1;
        session()->flash('message', 'User ' . $ptnsStore['nama_universitas'] . ' was Stored');
    }

    public function viewDetailPt($detailPt)
    {
        $this->ptnsStatus = 5;
        $this->emit('toDetailPT', $detailPt);
    }

    public function SendMessageDeletePt()
    {
        session()->flash('message', 'Pt was Delete');
        return redirect()->to('admin/ptns');
    }

    public function viewEditPt($dataEditPt)
    {
        $this->ptnsStatus = 6;
        $this->emit('toFormEdit', $dataEditPt);
    }

    public function PtUpdated($ptUpdate)
    {
        $this->ptnsStatus = 1;
        session()->flash('message', 'Pt ' . $ptUpdate["nama_universitas"] . '  was Updated');
    }

    public function closeComponent()
    {
        // '';
        return redirect()->to('admin/ptns');
    }
}
