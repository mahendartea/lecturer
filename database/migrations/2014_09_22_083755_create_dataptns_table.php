<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataptnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dataptns', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('nama_universitas');
            $table->integer('statuspt')->nullable();
            $table->string('email')->nullable();
            $table->string('weblink')->nullable();
            $table->text('alamat')->nullable();
            $table->string('kontak')->nullable();
            $table->longText('description')->nullable();
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
        Schema::dropIfExists('dataptns');
    }
}
