<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRolesFieldsToUsersTable extends Migration
{
   /**
    * Run the migrations.
    *
    * @return void
    */
   public function up()
   {
      Schema::table('users', function (Blueprint $table) {
         $table->foreignId('role_id')->unsigned();
         $table->string('student_address')->nullable();
         $table->foreignId('id_pt')->unsigned();
         $table->string('student_licence_number')->nullable();
         $table->string('teacher_qualifications')->nullable();
         $table->string('teacher_nidn')->nullable();
//         $table->foreign('role_id')->references('id')->on('roles');
//         $table->foreign('id_pt')->references('id')->on('dataptns');
      });
   }

   /**
    * Reverse the migrations.
    *
    * @return void
    */
   public function down()
   {
      Schema::table('users', function (Blueprint $table) {
         //
      });
   }
}
