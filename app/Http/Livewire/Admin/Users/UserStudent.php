<?php

namespace App\Http\Livewire\Admin\Users;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class UserStudent extends Component
{
   use WithPagination;

   public $paginate = 5;
   public $iduser;
   public $confirmingUserDeletion = false;
   public $searchS;
   public function render()
   {
      if ($this->searchS == Null) {
         $dataStudent = DB::table('users')->join('dataptns', 'users.id_pt', '=', 'dataptns.id')->select('users.name', 'users.id', 'dataptns.nama_universitas', 'users.created_at', 'users.student_licence_number')->where('role_id', '2')->paginate($this->paginate);
      } else {
         $dataStudent = DB::table('users')->join('dataptns', 'users.id_pt', '=', 'dataptns.id')->select('users.name', 'users.id', 'dataptns.nama_universitas', 'users.created_at', 'users.student_licence_number')->where('role_id', '2')->where('users.name', 'like', '%' . $this->searchS . '%')->orWhere('users.student_licence_number', 'like', '%' . $this->searchS . '%')->paginate($this->paginate);
      }
      return view('livewire.admin.users.user-student', ['students' => $dataStudent]);
   }

   public function viewDetail($id)
   {
      $detailUser = DB::table('users')->join('dataptns', 'users.id_pt', '=', 'dataptns.id')->select('users.id', 'users.name', 'users.email', 'users.role_id', 'users.created_at', 'users.student_licence_number', 'users.updated_at', 'users.teacher_qualifications', 'users.student_address', 'dataptns.nama_universitas', 'users.teacher_nidn')->where('users.id', '=', $id)->get();
      $this->emit('detailUser', $detailUser[0]);
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

   public function editUser($id)
   {
      // $editUserData = User::find($id);
      $editUserData = DB::table('users')->join('dataptns', 'users.id_pt', '=', 'dataptns.id')->select('users.id', 'users.name', 'users.email', 'users.id_pt', 'users.role_id', 'users.created_at', 'users.teacher_qualifications', 'users.student_licence_number', 'users.updated_at', 'dataptns.nama_universitas', 'users.student_address', 'users.teacher_nidn')->where('users.id', '=', $id)->get();
      $this->emit('editUserE', $editUserData[0]);
   }
}
