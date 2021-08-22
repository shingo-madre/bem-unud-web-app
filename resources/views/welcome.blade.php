<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Hiii!</title>
  </head>

  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
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

    <div class="container mb-5">
        <div class="row">
            <div class="col-10">
                 <h1 class="mt-3">Silahkan Isi Request Sertifikat</h1>
            </div>
        </div>

        <div class="mb-3">
            <label for="exampleDataList" class="form-label">Tipe Sertifikat</label>
            <select class="form-select" aria-label="Default select example">
              <option value="1">Sertifikat Terima Kasih</option>
              <option value="2">Sertifikat dengan Nama</option>
            </select>
            </div>
        
        <div class="mb-3">
        <label for="exampleDataList" class="form-label">Kementrian Yang Mengajukan</label>
        <select class="form-select" aria-label="Default select example">
          <option value="1">KHMK</option>
          <option value="2">MENKEU</option>
          <option value="3">KESKAB</option>
          <option value="4">HUBLU</option>
          <option value="5">SINPUS</option>
          <option value="6">KOMINFO</option>
          <option value="7">KWU</option>
          <option value="8">MENBUD</option>
          <option value="9">SOSLINDUP</option>
          <option value="10">PEMDES</option>
          <option value="11">JAKNAS</option>
          <option value="12">JAKDA</option>
          <option value="13">ADKESMA</option>
          <option value="14">MIBAT</option>
          <option value="15">PSDM</option>
          <option value="16">RISBANG</option>
        </select>
        </div>

        <div class="mb-3">
          <label for="exampleDataList" class="form-label">Jabatan</label>
          <select class="form-select" aria-label="Default select example">
            <option selected>Jabatan</option>
            <option value="1">Peserta</option>
            <option value="2">Moderator</option>
            <option value="3">Pembicara</option>
            <option value="4">Panitia</option>
          </select>
          </div>

        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Deskripsi Kegiatan</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Nama Lengkap Pembicara/Moderator</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="I Gusti Nyoman">
        </div>

        <div class="mb-3">
          <label for="formFile" class="form-label">File Excel Nama Peserta/Panitia</label>
          <input class="form-control" type="file" id="formFile">
      </div> 

        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Nomor Sertifikat</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="43.001/BEM-UNUD/VII/2021">
        </div>

        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Nama Kegiatan</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
        </div>

        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Hari, Tanggal</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="28 Februari 2021">
        </div>

        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Bertempat di</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
        </div>

        <div class="mb-3">
          <label for="exampleDataList" class="form-label">Cap</label>
          <select class="form-select" aria-label="Default select example">
            <option selected></option>
            <option value="1">Basah</option>
            <option value="2">Digital</option>
          </select>
          </div>

        <div class="mb-3">
            <label for="exampleDataList" class="form-label">Apakah Ingin Menambahkan Tanda Tangan Menteri</label>
            <select class="form-select" aria-label="Default select example">
              <option selected></option>
              <option value="1">Ya</option>
              <option value="2">Tidak</option>
            </select>
        </div>  

        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Nama Lengkap Menteri</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
        </div>

        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">NIM Menteri</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
        </div>

        <div class="mb-3">
          <label for="formFile" class="form-label">File Tanda Tangan Menteri</label>
          <input class="form-control" type="file" id="formFile">
        </div> 
        
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <button class="btn btn-primary me-md-2" type="submit">Submit</button>
        </div>
        
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
  </body>
</html>