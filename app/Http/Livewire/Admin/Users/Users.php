<?php

namespace App\Http\Livewire\Admin\Users;

use Livewire\Component;
use Livewire\WithPagination;

class Users extends Component
{
  use WithPagination;

  public $paginate = 5;

  // usersStatus 1(index),2(lecturer),3(student)
  public $usersStatus = 1;


  protected $listeners = [
    'StoreUser' => 'UserStored',
    'detailUser' => 'showUserDetail',
    'editUserE' => 'ShowFormEdit',
    'UpdatedUserD' => 'UpdateUserSuccess',
    'successDeleteUser' => 'SendMessageDelete'
  ];

  public function render()
  {
    return view('livewire.admin.users.users');
  }


  public function toUsersLecturer()
  {
    $this->usersStatus = 2;
  }

  public function toUsersStudent()
  {
    $this->usersStatus = 3;
  }

  public function toUsersIndex()
  {
    $this->usersStatus = 1;
  }

  public function toCreateUserForm()
  {
    $this->usersStatus = 4;
  }

  public function UserStored($userStore)
  {
    $this->usersStatus = 1;
    session()->flash('message', 'User ' . $userStore['name'] . ' was Stored');
  }

  public function showUserDetail($detailUser)
  {
    $this->usersStatus = 5;
    $this->emit('toDetailUser', $detailUser);
  }

  public function ShowFormEdit($editUserData)
  {
    $this->usersStatus = 6;
    $this->emit('toFormEdit', $editUserData);
  }

  public function UpdateUserSuccess($updateStore)
  {
    $this->usersStatus = 1;
    session()->flash('message', 'User ' . $updateStore["name"] . '  was Updated');
  }

  public function SendMessageDelete()
  {
    session()->flash('message', 'User  was Deleted');
    return redirect()->to('admin/users');
  }

  public function closeComponent()
  {
    // '';
    return redirect()->to('admin/users');
  }
}
