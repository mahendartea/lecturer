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
        $queryData = CourseYear::where('user_id', Auth::id())->orderBy('id', 'desc');
        $data = [
            'CourseYears' => $queryData->get(),
        ];
        return view('livewire.teacher.courses.history-courses', ['CourseHis' => $data['CourseYears']]);
    }

    public function toChangeCourseYearValue($id)
    {
        $this->courseYearActive = $id;
    }
}
