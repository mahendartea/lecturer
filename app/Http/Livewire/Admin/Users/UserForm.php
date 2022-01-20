<?php

namespace App\Http\Livewire\Admin\Users;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class UserForm extends Component
{
   public $name;
   public $email;
   public $password;
   public $password_confirmation;
   public $institution;
   public $role_id;
   public $student_address;
   public $student_licence_number;
   public $teacher_qualifications;
   public $teacher_nidn;
   public $data_pt;

   public function render()
   {
      $this->data_pt = DB::table('dataptns')->get();
      return view('livewire.admin.users.user-form', ['datapt' => $this->data_pt]);
   }

   protected $rules = [
      'name' => 'required|min:3',
      'email' => 'required|email|unique:users',
      'password' => 'required|min:6',
      'password_confirmation' => 'required_with:password|same:password|min:6',
      'role_id' => 'required',
      'institution' => 'required',
      'student_licence_number' => 'integer|min:3|nullable',
      'teacher_nidn' => 'integer|unique:users|min:3|nullable'
   ];

   public function store()
   {
      $this->validate();

      $userStore = User::create([
         'name' => $this->name,
         'email' => $this->email,
         'password' => Hash::make($this->password),
         'id_pt' => $this->institution,
         'role_id' => $this->role_id,
         'student_address' => $this->student_address,
         'student_licence_number' => $this->student_licence_number,
         'teacher_qualifications' => $this->teacher_qualifications,
         'teacher_nidn' => $this->teacher_nidn,
      ]);
      $this->emit('StoreUser', $userStore);
   }
}
