<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudyProgramsTable extends Migration
{
   /**
    * Run the migrations.
    *
    * @return void
    */
   public function up()
   {
      Schema::create('study_programs', function (Blueprint $table) {
         $table->id();
         $table->string('kode_prodi');
         $table->string('prodi_name');
         $table->unsignedBigInteger('faculty_id');
         $table->foreign('faculty_id')->references('id')->on('faculties')->onDelete('cascade');
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
      Schema::dropIfExists('study_programs');
   }
}
