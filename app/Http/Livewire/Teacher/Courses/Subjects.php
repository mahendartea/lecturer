<?php

namespace App\Http\Livewire\Teacher\Courses;

use App\Models\Course;
use App\Models\CourseYear;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Subjects extends Component
{
    use WithPagination;

    public $paginate = 5;

    public $dataActive = 1;

    public function mount($idyear)
    {
        $this->dataActive = $idyear;
    }

    public function render()
    {
        $dataMakul = Course::where('user_id', Auth::id());

        $year = CourseYear::where('id', $this->dataActive)->get();

        $data = [
            'subjects' => $dataMakul->where('course_year_id', $this->dataActive)->with('courseyear')->paginate($this->paginate),
            'year' => $year[0]
        ];

        return view('livewire.teacher.courses.subjects', ['subjects' => $data['subjects'], 'ta' => $data['year']]);
    }
}
