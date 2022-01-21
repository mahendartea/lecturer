<?php

namespace App\Http\Livewire\Teacher\Courses;

use App\Models\CourseYear;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class HistoryCourses extends Component
{
  public $courseYearActive = 1;

  public $showFormAddYear = false;

  public $deleteStatus = true;

  public $smt;
  public $tAjar;

  public function render()
  {
    $queryData = CourseYear::where('user_id', Auth::id())->orderBy('year', 'desc')->orderBy('semester', 'desc');
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
    'tAjar' => 'required|date_format:Y|digits:4',
    'smt' => 'required'
  ];

  public function messages()
  {
    return [
      'tAjar.required' => 'Harus input Tahun Ajar..',
      'tAjar.date_format' => 'Harus angka tahun..',
      'tAjar.digits' => 'Harus 4 digit..',
      'smt.required' => 'Harus pilih Semester..'
    ];
  }

  public function store()
  {
    $this->validate();
    $yearadd = CourseYear::create([
      'user_id' => Auth::id(),
      'semester' => $this->smt,
      'year' => $this->tAjar,
      'ket_tahun_ajar' => $this->smt . ' ' . $this->tAjar . '/' . $this->tAjar + 1
    ]);

    $this->showFormAddYear = false;

    session()->flash('message', 'Tahun ajar berhasil ditambahkan');
  }

  public function deleteYear($id)
  {
      $hapus = CourseYear::find($id)->delete();
      session()->flash('message', 'Berhasil dihapus');
  }
}
