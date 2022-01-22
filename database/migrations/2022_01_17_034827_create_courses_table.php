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
         $table->unsignedBigInteger('course_year_id');
         $table->unsignedBigInteger('user_id');
         $table->unsignedBigInteger('prodi_id');
         $table->string('class');
         $table->foreign('course_year_id')->references('id')->on('course_years')->onDelete('cascade');
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
      // Schema::dropIfExists('courses');
      Schema::table('courses', function (Blueprint $table) {
         $table->dropForeign(['course_year_id']);
         $table->dropColumn(['course_year_id']);
      });
   }
}
