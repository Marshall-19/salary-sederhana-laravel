<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaryawanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyawan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_jabatan')->unsigned();
            // unsigned memulai dari angka 1
            $table->string('nama_karyawan');
            $table->enum('status', ['magang','kontrak','tetap']);
            $table->string('tanggal_masuk');
            $table->string('no_hp')->unique();
            // unique untuk menghindari data duplicate/data sama
            $table->string('username')->unique();
            $table->string('password');
            $table->foreign('id_jabatan')->references('id')->on('jabatan')->onDelete('cascade');
            // relasi dari tabel jabatan yang ditampung di id_jabatan
            // cascade merupakan
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
        Schema::dropIfExists('karyawan');
    }
}
