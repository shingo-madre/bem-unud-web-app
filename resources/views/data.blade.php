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

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Bem Udayana</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/About">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Insight</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>

    <div class="container-fluid mt-3 align-middle">
    <table class="table table-bordered table-striped table-responsive">
        <thead>
            <tr>
                <th>tipe sertif</th>
                <th>kementrian yang mengajukan</th>
                <th>jabatan</th>
                <th>deskripsi kegiatan</th>
                <th>nama lengkap pembicara</th>
                <th>file excel nama</th>
                <th>nomor sertif</th>
                <th>nama kegiatan</th>
                <th>hari tanggal</th>
                <th>bertempat di</th>
                <th>cap</th>
                <th>tambah ttd menteri</th>
                <th>nama lengkap menteri</th>
                <th>nim menteri</th>
                <th>file ttd menteri</th>
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
                <td><a class="btn btn-info" href="download/{{ $p->file_excel_nama }}">Download</a></td>
                <td>{{$p->nomor_sertif}}</td>
                <td>{{$p->nama_kegiatan}}</td>
                <td>{{$p->hari_tanggal}}</td>
                <td>{{$p->bertempat_di}}</td>
                <td>{{$p->cap}}</td>
                <td>{{$p->tambah_ttd_menteri}}</td>
                <td>{{$p->nama_lengkap_menteri}}</td>
                <td>{{$p->nim_menteri}}</td>
                <td><a class="btn btn-info" href="download/{{ $p->file_ttd_menteri }}">Download</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</body>
</html>