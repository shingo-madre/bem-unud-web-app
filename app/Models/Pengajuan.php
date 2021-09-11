<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
   protected $table = "pengajuan_sertifikats";

   protected $fillable = [
       'tipe_sertifikat', 
       'kementrian_yang_mengajukan',
       'jabatan',
       'deskripsi_kegiatan',
       'nama_lengkap_pembicara',
       'file_excel_nama',
       'nomor_sertif',
       'nama_kegiatan',
       'hari_tanggal',
       'bertempat_di',
       'cap',
       'tambah_ttd_menteri',
       'nama_lengkap_menteri',
       'nim_menteri',
       'file_ttd_menteri',
    ];
}
