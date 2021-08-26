<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Extension\Table\Table;

class CreatePengajuansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuans', function (Blueprint $table) {
            $table->id()->nullable();
            $table->string('tipe_sertifikat')->nullable();
            $table->string('kementrian_yang_mengajukan')->nullable();
            $table->string('jabatan')->nullable();
            $table->string('deskripsi_kegiatan')->nullable();
            $table->string('nama_lengkap_pembicara')->nullable();
            $table->string('file_excel_nama')->nullable();
            $table->string('nomor_sertif')->nullable();
            $table->string('nama_kegiatan')->nullable();
            $table->string('hari_tanggal')->nullable();
            $table->string('bertempat_di')->nullable();
            $table->string('cap')->nullable();
            $table->string('tambah_ttd_menteri')->nullable();
            $table->string('nama_lengkap_menteri')->nullable();
            $table->string('nim_menteri')->nullable();
            $table->string('file_ttd_menteri')->nullable();
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
        Schema::dropIfExists('pengajuans');
    }
}
