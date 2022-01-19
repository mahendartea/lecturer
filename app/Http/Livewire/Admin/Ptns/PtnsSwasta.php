<?php

namespace App\Http\Livewire\Admin\Ptns;

use App\Models\Dataptn;
use Livewire\Component;
use Livewire\WithPagination;

class PtnsSwasta extends Component
{
    use WithPagination;
    public $paginate = 10;
    public $search;
    public $idPt;
    public $confirmingPtDeletion = false;

    public function render()
    {
        if ($this->search == null) {
            return view('livewire.admin.ptns.ptns-swasta', ['ptns' => Dataptn::where('statuspt', 2)->paginate($this->paginate)]);
        } else {
            return view('livewire.admin.ptns.ptns-swasta', ['ptns' => Dataptn::where('statuspt', 2)->where('nama_universitas', 'like', '%' . $this->search . '%')->paginate($this->paginate)]);
        }
    }

    public function deletePt($id)
    {
        $this->idPt = $id;
        $this->confirmingPtDeletion = true;
    }

    public function confirmDeletePT($id)
    {
        $this->confirmingPtDeletion = false;

        if ($id) {
            $data = Dataptn::find($id);
            $data->delete();
        }
        $this->emit('successDetelePt');
    }

    public function viewDetailPt($id)
    {
        $detailPt = Dataptn::where('id', $id)->get();
        $this->emit('detailPT', $detailPt[0]);
    }

    public function editPt($idPt)
    {
        $dataEditPt = Dataptn::where('id', $idPt)->get();
        $this->emit('editPtE', $dataEditPt[0]);
    }
}
