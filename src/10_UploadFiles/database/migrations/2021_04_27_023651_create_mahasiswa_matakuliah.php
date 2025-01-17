<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswaMatakuliah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa_matakuliah', function (Blueprint $table) {
            $table->id();
            $table->string('mahasiswa_id', 10)->nullable();
            $table->unsignedBigInteger('matakuliah_id')->nullable();
            $table->string('nilai');

            $table->foreign('mahasiswa_id')->references('Nim')->on('mahasiswas')->onDelete('set null')->onUpdate('cascade');
            $table->foreign('matakuliah_id')->references('id')->on('matakuliah')->onDelete('set null')->onUpdate('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswa_matakuliah');
    }
}
