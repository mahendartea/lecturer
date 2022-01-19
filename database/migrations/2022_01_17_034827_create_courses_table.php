<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
   /**
    * Run the migrations.
    *
    * @return void
    */
   public function up()
   {
      Schema::create('courses', function (Blueprint $table) {
         $table->id();
         $table->string('code_course');
         $table->string('name_course');
         $table->foreignId('course_years_id')->unsigned();
         $table->foreignId('user_id')->unsigned();
         $table->foreignId('prodi_id')->unsigned();
         $table->string('class');
//         $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
//         $table->foreign('prodi_id')->references('kode_prodi')->on('study_programs')->onDelete('cascade');
         $table->timestamps();
      });
   }

   /**
    * Reverse the migrations.
    *
    * @return void
    */
   public function down()
   {
      Schema::dropIfExists('courses');
   }
}
