<?php

namespace App\Http\Livewire\Admin\Lmss;

use Livewire\Component;

class Lms extends Component
{
    public $lmsstatus = 1;

    public function render()
    {
        return view('livewire.admin.lmss.lms');
    }

    public function toCoursesIndex()
    {
        $this->lmsstatus = 1;
    }

    public function toCoursesLecturer()
    {
        $this->lmsstatus = 2;
    }
}
