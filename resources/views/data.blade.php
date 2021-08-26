<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th width="1%">tipe sertif</th>
                <th width="1%">kementrian yang mengajukan</th>
                <th width="1%">jabatan</th>
                <th width="1%">deskripsi kegiatan</th>
                <th width="1%">nama lengkap pembicara</th>
                <th width="1%">file excel nama</th>
                <th width="1%">nomor sertif</th>
                <th width="1%">nama kegiatan</th>
                <th width="1%">hari tanggal</th>
                <th width="1%">bertempat di</th>
                <th width="1%">cap</th>
                <th width="1%">tambah ttd menteri</th>
                <th width="1%">nama lengkap menteri</th>
                <th width="1%">nim menteri</th>
                <th width="1%">file ttd menteri</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pengajuan as $p)
            <tr>
                <td>{{$p->tipe_sertifikat}}</td>
                <td>{{$p->kementrian_yang_mengajukan}}</td>
                <td>{{$p->jabatan}}</td>
                <td>{{$p->deskripsi_kegiatan}}</td>
                <td>{{$p->nama_lengkap_pembicara}}</td>
                <td>{{$p->file_excel_nama}}</td>
                <td>{{$p->nomor_sertif}}</td>
                <td>{{$p->nama_kegiatan}}</td>
                <td>{{$p->hari_tanggal}}</td>
                <td>{{$p->bertempat_di}}</td>
                <td>{{$p->cap}}</td>
                <td>{{$p->tambah_ttd_menteri}}</td>
                <td>{{$p->nama_lengkap_menteri}}</td>
                <td>{{$p->nim_menteri}}</td>
                <td>{{$p->file_ttd_menteri}}</td>
                <td><a class="btn btn-danger" href="/upload/hapus/{{ $p->id }}">HAPUS</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</body>
</html>