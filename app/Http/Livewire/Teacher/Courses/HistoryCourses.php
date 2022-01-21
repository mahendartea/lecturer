<?php

namespace App\Http\Livewire\Teacher\Courses;

use App\Models\Course;
use App\Models\CourseYear;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class HistoryCourses extends Component
{
    public $courseYearActive = 1;

    public $showFormAddYear = false;

    public $smt;
    public $tAjar;

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

    protected $rules = [
        'tAjar' => 'required|integer',
        'smt' => 'required'
    ];

    public function store()
    {
        $this->validate();
        $yearadd = CourseYear::create([
            'user_id'=> Auth::id(),
            'semester'=> $this->smt,
            'year'=> $this->tAjar,
            'ket_tahun_ajar'=> $this->smt .' '.$this->tAjar . '/' .$this->tAjar + 1
        ]);

        $this->showFormAddYear = false;
    }
}
