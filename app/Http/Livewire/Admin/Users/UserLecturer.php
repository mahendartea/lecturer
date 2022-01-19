<?php

namespace App\Http\Livewire\Admin\Users;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class UserLecturer extends Component
{
   use WithPagination;
   public $paginate = 5;
   public $iduser;
   public $confirmingUserDeletion = false;
   public $searchL;

   public function render()
   {
      if ($this->searchL == NULL) {
         $dataLecturer = DB::table('users')->join('dataptns', 'users.id_pt', '=', 'dataptns.id')->select('users.id', 'users.name', 'users.role_id', 'dataptns.nama_universitas', 'users.teacher_qualifications', 'users.teacher_nidn')->where('users.role_id', 3)->paginate($this->paginate);
      } else {
         $dataLecturer = DB::table('users')->join('dataptns', 'users.id_pt', '=', 'dataptns.id')->select('users.id', 'users.name', 'users.role_id', 'dataptns.nama_universitas', 'users.teacher_qualifications', 'users.teacher_nidn')->where('users.role_id', 3)->where('users.name', 'like', '%' . $this->searchL . '%')->orWhere('users.teacher_nidn', 'like', '%' . $this->searchL . '%')->paginate($this->paginate);
      }
      return view('livewire.admin.users.user-lecturer', ['lecturer' => $dataLecturer]);
   }

   public function viewDetail($id)
   {
      $detailUser = DB::table('users')->join('dataptns', 'users.id_pt', '=', 'dataptns.id')->select('users.id', 'users.name', 'users.email', 'users.role_id', 'users.created_at', 'users.student_licence_number', 'users.updated_at', 'users.teacher_qualifications', 'users.student_address', 'dataptns.nama_universitas', 'users.teacher_nidn')->where('users.id', '=', $id)->get();
      // dd($detailUser);
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
      $editUserData = DB::table('users')->join('dataptns', 'users.id_pt', '=', 'dataptns.id')->select('users.id', 'users.name', 'users.email', 'users.id_pt', 'users.role_id', 'users.created_at', 'users.teacher_qualifications', 'users.student_licence_number', 'users.updated_at', 'dataptns.nama_universitas', 'users.student_address', 'users.teacher_nidn')->where('users.id', '=', $id)->get();
      $this->emit('editUserE', $editUserData[0]);
   }
}
