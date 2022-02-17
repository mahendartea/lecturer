<?php

namespace App\Http\Livewire\Admin\Ptns;

use App\Models\Faculty;
use App\Models\StudyProgram;
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

    public $formAddFaculty;

    public $kodefak;
    public $namafak;
    public $kodepro;
    public $namapro;
    public $idfak;
    public $nidn;
    public $namados;

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
        $dataFukultas = $fakulties->with('studyprogram')->paginate(3, ['*'], 'fakulties');
        $dataDosen = User::where('id_pt', $this->idpt)->where('role_id', 3)->paginate(5, ['*'], 'dosen');

        return view('livewire.admin.ptns.ptn-manage', [
            'faculties' => $dataFukultas,
            'jmlfakultas' => $jumlahfakulties,
            'jmlprodi' => $jmlProdi,
            'jmldosen' => $jmlDosen,
            'dataDosen' => $dataDosen,
        ]);
    }

    // protected $rules = [
    //     'kodefak' => 'required|min:3',
    //     'namafak' => 'required|min:3|max:50|string',
    //     // 'kodepro' => 'required|min:3',
    //     // 'namapro' => 'required|min:3|max:50|string',
    //     // 'idfak' => 'required',
    // ];

    // public function messages()
    // {
    //     return [
    //         'kodefak.required' => 'Harus input kode fakultas..',
    //         'kodefak.min' => 'Kode Matakuliah minimal 3 karakter..',
    //         'namafak.required' => 'Harus input nama fakultas..',
    //         'namafak.min' => 'Nama makul minimal 3 karakter..',
    //         // 'kodepro.required' => 'Harus input kode prodi..',
    //         // 'kodepro.min' => 'Kode prodi minimal 3 karakter..',
    //         // 'namapro.required' => 'Harus input nama prodi..',
    //         // 'namapro.min' => 'Nama prodi minimal 3 karakter..',
    //         // 'idfak.required' => 'Harus Pilih fakultas..',
    //     ];
    // }

    public function storefak()
    {
        // $this->validate();
        $addfakulties = Faculty::create([
            'dataptn_id' => $this->idpt,
            'faculty_code' => $this->kodefak,
            'faculty_name' => $this->namafak,
        ]);
        session()->flash('message', 'Berhasil ditambahkan..!');
    }

    public function storepro()
    {
        // $this->validate();
        $addprodi = StudyProgram::create([
            'faculty_id' => $this->idfak,
            'kode_prodi' => $this->kodepro,
            'prodi_name' => $this->namapro,
            'dataptn_id' => $this->idpt,
        ]);

        session()->flash('message', 'Berhasil ditambahkan..!');
    }

    public function storedos()
    {
        // $this->validate();
        $adddosen = User::create([
            'id_pt' => $this->idpt,
            'name' => $this->namados,
            'teacher_nidn' => $this->nidn,
            'password' => bcrypt('12345678'),
            'role_id' => 3,
        ]);

        session()->flash('message', 'Berhasil ditambahkan..!');
    }
}
