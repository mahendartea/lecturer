<?php

namespace App\Http\Livewire\Teacher\Courses;

use Livewire\Component;

class Courses extends Component
{
    public $coursePage = 1;

    public function render()
    {
        return view('livewire.teacher.courses.courses');
    }

    public function toHistoryCourses()
    {
        $this->coursePage = 1;
    }

    public function toCounseling()
    {
        $this->coursePage = 2;
    }

    public function toTimeTable()
    {
        $this->coursePage = 3;
    }
}
