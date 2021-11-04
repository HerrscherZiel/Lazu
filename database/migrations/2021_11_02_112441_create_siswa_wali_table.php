<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswaWaliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa_wali', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->biginteger('siswa_id')->nullable()->unsigned();
            $table->biginteger('wali_id')->nullable()->unsigned();
            $table->string('status_siswa')->default('NULL');
            $table->foreign('wali_id')->unsigned()->references('id')->on('walis')->onDelete('cascade');
            $table->foreign('siswa_id')->unsigned()->references('id')->on('model_siswas')->onDelete('cascade');
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
        Schema::dropIfExists('siswa_wali');
    }
}
