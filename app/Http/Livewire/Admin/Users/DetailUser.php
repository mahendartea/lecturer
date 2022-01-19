<?php

namespace App\Http\Livewire\Admin\Users;

use Livewire\Component;

class DetailUser extends Component
{
    public $name;
    public $email;
    public $created_at;
    public $updated_at;
    public $role_id;
    public $student_address;
    public $institution;
    public $student_licence_number;
    public $teacher_qualifications;
    public $teacher_nidn;

    protected $listeners = ['toDetailUser' => 'showDetailnya'];

    public function showDetailnya($detailUser)
    {
        $this->name = $detailUser['name'];
        $this->email = $detailUser['email'];
        $this->created_at = $detailUser['created_at'];
        $this->updated_at = $detailUser['updated_at'];
        $this->role_id = $detailUser['role_id'];
        $this->student_address = $detailUser['student_address'];
        $this->institution = $detailUser['nama_universitas'];
        $this->student_address = $detailUser['student_address'];
        $this->teacher_qualifications = $detailUser['teacher_qualifications'];
        $this->teacher_nidn = $detailUser['teacher_nidn'];
        $this->student_licence_number = $detailUser['student_licence_number'];
    }

    public function render()
    {
        return view('livewire.admin.users.detail-user');
    }
}
