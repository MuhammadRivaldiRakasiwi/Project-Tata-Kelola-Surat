<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetugassTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('petugass', function (Blueprint $table) {
            $table->id();
            $table->string('nama_peserta');
            $table->string('nis');
            $table->string('nama_perusahaan');
            $table->date('tanggal_pelaksanaan');
            $table->date('tanggal_berakhir');
            $table->string('kontak');
            $table->date('tanggal_surat');
            $table->string('monitoring');
            $table->string('keterangan');
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
        Schema::dropIfExists('petugass');
    }
}
