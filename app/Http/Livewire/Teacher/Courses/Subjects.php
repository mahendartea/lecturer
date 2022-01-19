<?php

namespace App\Http\Livewire\Teacher\Courses;

use App\Models\Course;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Subjects extends Component
{
   use WithPagination;

   public $paginate = 5;

   public function render()
   {
      $data = [
         'subjects' => Course::where('user_id', Auth::id())->paginate($this->paginate)
      ];
      return view('livewire.teacher.courses.subjects', ['subjects' => $data['subjects']]);
   }
}
