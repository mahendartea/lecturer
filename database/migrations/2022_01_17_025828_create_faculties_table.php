<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacultiesTable extends Migration
{
   /**
    * Run the migrations.
    *
    * @return void
    */
   public function up()
   {
      Schema::create('faculties', function (Blueprint $table) {
         $table->id();
         $table->string('faculty_code');
         $table->string('faculty_name');
         $table->unsignedBigInteger('dataptn_id');
         $table->foreign('dataptn_id')->references('id')->on('dataptns')->onDelete('cascade');
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
      Schema::dropIfExists('faculties');
   }
}
