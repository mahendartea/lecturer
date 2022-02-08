<?php

namespace App\Http\Livewire\Admin\Ptns;

use App\Models\Faculty;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class PtnManage extends Component
{
  use WithPagination;

  public $idpt;
  public $namapt;
  public $statuspt;
  public $emailpt;
  public $weblinkpt;
  public $alamatpt;
  public $kontakpt;
  public $deskripsipt;
  public $pagination = 5;

  protected $listeners = [
    'toPtnManage' => 'viewPtnManage',
  ];


  public function viewPtnManage($dataManagePt)
  {
    $this->idpt = $dataManagePt['id'];
    $this->namapt = $dataManagePt['nama_universitas'];
    $this->statuspt = $dataManagePt['statuspt'];
    $this->emailpt = $dataManagePt['email'];
    $this->weblinkpt = $dataManagePt['weblink'];
    $this->alamatpt = $dataManagePt['alamat'];
    $this->kontakpt = $dataManagePt['kontak'];
    $this->deskripsipt = $dataManagePt['description'];
  }

  public function render()
  {
    $fakulties = Faculty::where('dataptn_id', $this->idpt);
    $jumlahfakulties = count($fakulties->with('studyprogram')->get());
    $jmlProdi = count($fakulties->with('studyprogram')->get()->pluck('studyprogram')->flatten()->unique('id'));
    $jmlDosen = count(User::where('id_pt', $this->idpt)->where('role_id', 3)->get());
    $dataFukultas = $fakulties->with('studyprogram')->get();
    $dataDosen = User::where('id_pt', $this->idpt)->where('role_id', 3)->paginate($this->pagination);

    return view('livewire.admin.ptns.ptn-manage', [
      'faculties' => $dataFukultas,
      'jmlfakultas' => $jumlahfakulties,
      'jmlprodi' => $jmlProdi,
      'jmldosen' => $jmlDosen,
      'dataDosen' => $dataDosen,
    ]);
  }
}
