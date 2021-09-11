<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


use App\Models\Pengajuan;
use Illuminate\Support\Facades\Crypt;
use PhpParser\Node\Stmt\Else_;

class UploadController extends Controller
{
    public function upload()
    {
        $pengajuan = Pengajuan::get();
        return view('upload', ['pengajuan' => $pengajuan]);
    }

    public function proses_upload(Request $request)
    {
        $request->validate([

            'tipe_sertifikat' => 'required',
            'kementrian_yang_mengajukan' => 'required',
            'jabatan' => 'required',
            'deskripsi_kegiatan' => 'required',
            'nama_lengkap_pembicara' => 'required',
            'nomor_sertif' => 'required',
            'nama_kegiatan' => 'required',
            'hari_tanggal' => 'required',
            'bertempat_di' => 'required',
            'cap' => 'required',
            'file_excel_nama' => 'required',
            
        ]);
        $uploads = $request->all();
        if($request->file_excel_nama != NULL || $request->file_ttd_Menteri != NULL )
        {
            
            if ($request->file_excel_nama) {
                $file_name = 'file_name_participant/'.time() . '.' . $request->file_excel_nama->extension();
                $request->file_excel_nama->storeAs('public/data/', $file_name);
                $uploads['file_excel_nama'] =  $file_name;
            }

            if ($request->file_ttd_menteri) {
                $file_namew = 'file_ttd_menteri/'.time() . '.' . $request->file_ttd_menteri->extension();
                $request->file_ttd_menteri->storeAs('public/data/', $file_namew);
                $uploads['file_ttd_menteri'] =  $file_namew;
            }

            // dd( [$uploads['file_ttd_menteri'], $uploads['file_excel_nama'] ]);
            Pengajuan::create($uploads);
        } 
        
       return redirect()->back()->with('success','Berhasil Melakukan Pengajuan');
       
    }

    public function display_data()
    {
        $pengajuan = Pengajuan::get();
        return view('data', ['pengajuan' => $pengajuan]);
    }

    public function download($filename)
    {
        // dd(Crypt::decrypt($filename));
        $file_path = public_path().'/storage/data/'. Crypt::decrypt($filename);
        $file_name = explode("/", Crypt::decrypt($filename));

        if(file_exists($file_path)) 
        {
            return response()->download($file_path, $file_name[1] , [
                'Content-Length: '.filesize($file_path)
            ]);
        }
        else {
            exit('Requsted file does not exist on our server');
        }
        

        
    }
}
