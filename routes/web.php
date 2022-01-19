<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
   return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
   return view('dashboard');
})->name('dashboard');

Route::group(['middleware' => 'auth'], function () {
   Route::group(['middleware' => 'role:student', 'prefix' => 'student', 'as' => 'student.'], function () {
      Route::resource('lessons', \App\Http\Controllers\Students\LessonController::class);
   });
   Route::group(['middleware' => 'role:teacher', 'prefix' => 'teacher', 'as' => 'teacher.'], function () {
      Route::resource('courses', \App\Http\Controllers\Teachers\CourseController::class);
      Route::resource('researches', \App\Http\Controllers\Teachers\ResearchController::class);
      Route::resource('dedications', \App\Http\Controllers\Teachers\DedicationController::class);
   });
   Route::group(['middleware' => 'role:admin', 'prefix' => 'admin', 'as' => 'admin.'], function () {
      Route::resource('users', \App\Http\Controllers\Admin\UserController::class);
      Route::resource('ptns', \App\Http\Controllers\Admin\DataptnController::class);
      Route::resource('lms', \App\Http\Controllers\Admin\LmsController::class);
      Route::resource('configure', \App\Http\Controllers\Admin\ConfigController::class);
      Route::get('/lecturer', [LecturerController::class, 'index']);
      Route::name('users.')->group(function () {
         Route::get('/lecturer', [LecturerController::class, 'index'])->name('lecturer');
      });
   });
});
