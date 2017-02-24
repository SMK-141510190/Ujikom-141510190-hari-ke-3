<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenggajiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penggajians', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('tunjangan_pegawai_id');
            $table->foreign('tunjangan_pegawai_id')->references('id')
                  ->on('tunjangan_pegawais')->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->integer('Jumlah_jam_lembur');
            $table->integer('Jumlah_uang_lembur');
            $table->integer('Gaji_pokok');
            $table->integer('Total_gaji');
            $table->date('Tanggal_pengambilan');
            $table->tinyInteger('Status_pengambilan');
            $table->string('Petugas_penerima');
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
        Schema::dropIfExists('penggajians');
    }
}
