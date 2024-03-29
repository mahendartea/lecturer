<?php

namespace App\Http\Livewire\Teacher\Courses;

use App\Models\CourseYear;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class HistoryCourses extends Component
{
   use WithPagination;
   public $paginate = 5;
   public $courseYearActive = 1;
   public $showFormAddYear = false;
   public $deleteStatus = true;
   public $confirmingDeleteYear = false;
   public $idYear;

   public $smt;
   public $tAjar;

   public function render()
   {
      $queryData = CourseYear::where('user_id', Auth::id())->orderBy('year', 'desc')->orderBy('semester', 'desc');
      $data = [
         'CourseYears' => $queryData->simplePaginate($this->paginate),
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
      $cekDataDBYear = CourseYear::where('user_id', Auth::id())->where('year', $this->tAjar)->where('semester', $this->smt)->first();

      if ($cekDataDBYear) {
         session()->flash('error', 'Data Sudah Ada..');
      } else {
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
   }

   public function deleteYear($id)
   {
      $this->idYear = $id;
      $this->confirmingDeleteYear = true;
   }

   public function deleteYearNow($id)
   {
      $hapus = CourseYear::find($id)->delete();
      $this->deleteStatus = true;
      if ($hapus) {
         session()->flash('message', 'Tahun ajar berhasil dihapus');
      } else {
         session()->flash('message', 'Tahun ajar gagal dihapus');
      }

      $this->confirmingDeleteYear = false;
   }
}
