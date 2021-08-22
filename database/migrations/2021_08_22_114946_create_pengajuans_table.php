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
            $table->id();
            $table->string('tipe_sertifikat');
            $table->string('kementrian_yang_mengajukan');
            $table->string('jabatan');
            $table->string('deskripsi_kegiatan');
            $table->string('nama_lengkap_pembicara/moderator');
            $table->string('nomor_sertifikat');
            $table->string('nama_kegiatan');
            $table->date('hari_tanggal');
            $table->string('bertempat_di');
            $table->string('cap');
            $table->string('tambah_ttd_menteri');
            $table->string('nim_menteri');
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
