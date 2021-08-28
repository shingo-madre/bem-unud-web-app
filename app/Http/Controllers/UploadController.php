<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\Pengajuan;

class UploadController extends Controller
{
    public function upload()
    {
        $pengajuan = Pengajuan::get();
        return view('upload', ['pengajuan' => $pengajuan]);
    }

    public function proses_upload(Request $request)
    {
       
        $file_nama = $request->file('file_excel_nama');
        $file_ttd = $request->file('file_ttd_menteri');
        
        $nama_file = $file_nama->getClientOriginalName();

        $file_nama->store('public');
        $nama_file_ttd = time()."-".$file_ttd->getClientOriginalName();
        
        
        $tujuan_upload = 'data';
        $file_nama->move($tujuan_upload, $nama_file);

        $path = Storage::putFile('public/data', $request->file('file_excel_nama'));
        
        Pengajuan::create([
            'tipe_sertifikat' => $request->tipe_sertifikat,
            'kementrian_yang_mengajukan' => $request->kementrian_yang_mengajukan,
            'jabatan' => $request->jabatan,
            'deskripsi_kegiatan' => $request->deskripsi_kegiatan,
            'nama_lengkap_pembicara' => $request->nama_lengkap_pembicara,
            'file_excel_nama' => $nama_file,
            'nomor_sertif' => $request->nomor_sertif,
            'nama_kegitan' => $request->nama_kegitan,
            'hari_tanggal' => $request->hari_tanggal,
            'bertempat_di' => $request->bertempat_di,
            'cap' => $request->cap,
            'tambah_ttd_menteri' => $request->tambah_ttd_menteri,
            'nama_lengkap_menteri' => $request->nama_lengkap_menteri,
            'nim_menteri' => $request->nim_menteri,
            'file_ttd_menteri' => $nama_file_ttd
        ]);
        
        return redirect()->back();
    }

    public function display_data()
    {
        $pengajuan = Pengajuan::get();
        return view('data', ['pengajuan' => $pengajuan]);
    }
}
