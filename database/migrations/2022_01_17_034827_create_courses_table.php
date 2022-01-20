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
         $table->foreignId('course_year_id')->unsigned();
         $table->foreignId('user_id')->unsigned();
         $table->foreignId('prodi_id')->unsigned();
         $table->string('class');
         $table->foreign('course_years_id')->references('id')->on('course_years');
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
