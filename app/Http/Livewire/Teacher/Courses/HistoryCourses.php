<?php

namespace App\Http\Livewire\Teacher\Courses;

use App\Models\Course;
use App\Models\CourseYear;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class HistoryCourses extends Component
{
   public $courseYearActive = 1;

   public function render()
   {
      $cekIdYear = Course::orderBy('id', 'desc')->where('user_id', Auth::id())->take(1)->get();

      $this->courseYearActive = $cekIdYear[0]->id;

      $data = [
         'CourseYears' => CourseYear::where('user_id', Auth::id())->orderBy('id','desc')->get(),
      ];
      return view('livewire.teacher.courses.history-courses', ['CourseHis' => $data['CourseYears'], 'idYear' => $this->courseYearActive]);
   }
}
