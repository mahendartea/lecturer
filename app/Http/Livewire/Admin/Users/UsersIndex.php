<?php

namespace App\Http\Livewire\Admin\Users;

use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;
use phpDocumentor\Reflection\Types\Null_;

class UsersIndex extends Component
{
   use WithPagination;

   public $paginate = 5;
   public $iduser;
   public $confirmingUserDeletion = false;
   public $search;

   public function render()
   {
      if ($this->search == NULL) {
         return view('livewire.admin.users.users-index', ['users' => DB::table('users')->join('dataptns', 'users.id_pt', '=', 'dataptns.id')->select('users.id', 'users.name', 'users.role_id', 'dataptns.nama_universitas')->paginate($this->paginate)]);
      } else {
         return view('livewire.admin.users.users-index', ['users' => DB::table('users')->join('dataptns', 'users.id_pt', '=', 'dataptns.id')->select('users.id', 'users.name', 'users.role_id', 'dataptns.nama_universitas')->where('users.name', 'like', '%' . $this->search . '%')->paginate($this->paginate)]);
      }
   }

   public function deleteUser($id)
   {
      $this->iduser = $id;
      $this->confirmingUserDeletion = true;
   }

   public function confirmDeleteUser($id)
   {
      $this->confirmingUserDeletion = false;
      if ($id) {
         $data = User::find($id);
         $data->delete();
      }
      $this->emit('successDeleteUser');
   }

   public function viewDetail($id)
   {
      $detailUser = DB::table('users')->join('dataptns', 'users.id_pt', '=', 'dataptns.id')->select('users.id', 'users.name', 'users.email', 'users.role_id', 'users.created_at', 'users.student_licence_number', 'users.updated_at', 'users.teacher_qualifications', 'users.student_address', 'dataptns.nama_universitas', 'users.teacher_nidn')->where('users.id', '=', $id)->get();
      $this->emit('detailUser', $detailUser[0]);
   }

   public function editUser($id)
   {
      $editUserData = DB::table('users')->join('dataptns', 'users.id_pt', '=', 'dataptns.id')->select('users.id', 'users.name', 'users.email', 'users.id_pt', 'users.role_id', 'users.created_at', 'users.teacher_qualifications', 'users.student_licence_number', 'users.updated_at', 'dataptns.nama_universitas', 'users.student_address', 'users.teacher_nidn')->where('users.id', '=', $id)->get();
      $this->emit('editUserE', $editUserData[0]);
   }
}
