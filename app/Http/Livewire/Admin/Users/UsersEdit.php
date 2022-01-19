<?php

namespace App\Http\Livewire\Admin\Users;

use App\Models\User;
//use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersEdit extends Component
{
   public $IdUser;
   public $name;
   public $email;
   public $created_at;
   public $updated_at;
   public $role_id;
   public $student_address;
   public $institution;
   public $student_licence_number;
   public $teacher_qualifications;
   public $nama_universitas;
   public $allptn = [];
   public $password;
   public $teacher_nidn;

   protected $listeners = ['toFormEdit' => 'dataFormEdit'];

   public function render()
   {
      $this->allptn = DB::table('dataptns')->get();
      return view('livewire.admin.users.users-edit', compact($this->allptn));
   }

   protected $rules = [
      'name' => 'required|min:3',
      'email' => 'required|email',
      // 'password' => 'required|min:6',
      //      'password_confirmation' => 'required_with:password|same:password|min:6',
      //      'role_id' => 'required',
      // 'institution' => 'required|min:3',
      'student_licence_number' => 'integer|min:3|nullable',
      'teacher_nidn' => 'integer|min:3|nullable',
   ];

   public function store()
   {
      $this->validate();
      if (empty($this->password)) {
         $dataUpdate = [
            'name' => $this->name,
            'email' => $this->email,
            'role_id' => $this->role_id,
            'student_address' => $this->student_address,
            'id_pt' => $this->id_pt,
            'student_licence_number' => $this->student_licence_number,
            'teacher_qualifications' => $this->teacher_qualifications,
            'teacher_nidn' => $this->teacher_nidn,
         ];
      } else {
         $dataUpdate = [
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'role_id' => $this->role_id,
            'student_address' => $this->student_address,
            'id_pt' => $this->id_pt,
            'student_licence_number' => $this->student_licence_number,
            'teacher_qualifications' => $this->teacher_qualifications,
            'teacher_nidn' => $this->teacher_nidn,
         ];
      }

      $updateStore = User::find($this->IdUser)->update($dataUpdate);
      if ($updateStore) {
         $this->emit('UpdatedUserD', $dataUpdate);
      }
   }

   public function dataFormEdit($editUserData)
   {
      $this->IdUser = $editUserData['id'];
      $this->name = $editUserData['name'];
      $this->email = $editUserData['email'];
      $this->created_at = $editUserData['created_at'];
      $this->updated_at = $editUserData['updated_at'];
      $this->role_id = $editUserData['role_id'];
      $this->student_address = $editUserData['student_address'];
      $this->id_pt = $editUserData['id_pt'];
      $this->student_licence_number = $editUserData['student_licence_number'];
      $this->teacher_qualifications = $editUserData['teacher_qualifications'];
      $this->nama_universitas = $editUserData['nama_universitas'];
      $this->teacher_nidn = $editUserData['teacher_nidn'];

      // $this->ptns = DB::table('dataptns')->get();
   }
}
