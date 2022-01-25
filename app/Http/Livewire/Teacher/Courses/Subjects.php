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
    public $statusFormCourse = 0;

    public $coursecode;
    public $coursename;
    public $courseyear;
    public $cls;

    public function mount($idyear)
    {
        $this->dataActive = $idyear;
    }

    public function render()
    {
        $dataMakul = Course::where('user_id', Auth::id());
        $cetakta = CourseYear::where('id', $this->dataActive)->get();
        $listyearcourses = CourseYear::where('user_id', Auth::id())->orderBy('year', 'desc')->orderBy('semester', 'desc')->get();

        $data = [
            'subjects' => $dataMakul->where('course_year_id', $this->dataActive)->with('courseyear')->paginate($this->paginate),
            'year' => $cetakta[0],
            'talist' => $listyearcourses,
        ];

        return view('livewire.teacher.courses.subjects', ['subjects' => $data['subjects'], 'ta' => $data['year'], 'talist' => $data['talist']]);
    }

    public function showFormCourse()
    {
        $this->statusFormCourse = 1;
    }

    protected $rules = [
        'coursecode' => 'required|max:10',
        'coursename' => 'required|max:50',
        'courseyear' => 'required',
        'cls' => 'required|max:10',
    ];

    public function messages()
    {
        return [
            'coursecode.required' => 'Harus input kode matakuliah..',
            'coursecode.max' => 'Kode Matakuliah maks 10 karakter..',
            'coursename.required' => 'Harus input nama mata kuliah..',
            'coursename.max' => 'Nama makul maks 50 karakter..',
            'cls.required' => 'Harus pilih Kelas..',
            'cls.max' => 'Kelas maks 10 karakter..',
            'courseyear.required' => 'Harus pilih Semester Tahun..',
        ];
    }

    public function storemk()
    {
        $this->validate();
        $addcourse = Course::create([
            'user_id' => Auth::id(),
            'code_course' => $this->coursecode,
            'name_course' => $this->coursename,
            'course_year_id' => $this->courseyear,
            'class' => $this->cls,
            'prodi_id' => 12321,
        ]);

        $this->statusFormCourse = 0;

        session()->flash('message', 'Matakuliah berhasil ditambahkan..!');
    }

    public function closeComponent()
    {
        // refresh page laravel
        // $this->emit('refreshPage');
    }
}
