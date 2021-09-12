<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge ">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>E-Sertif Bemudayana</title> 

  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" href="#">Bem Udayana</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

        </div>
    </nav>

    @if (count($errors) > 0)
    <div class="alert-danger alert container">
        @foreach ($errors->all() as $error)
           {{$error}} <br> 
        @endforeach
    </div>
    @endif

    @if (Session::has('success'))
    <div class="alert-success alert container">
      <span>{{ Session::get('success') }}</span>
    </div>
    @endif

    <div class="container mb-5">
        <div class="row">
            <div class="col-10">
                 <h1 class="mt-3">Silahkan Isi Request Sertifikat</h1>
                 <hr>
            </div>
        </div>
        <div class="card">
        <form class="p-3 m-3" action="/upload/proses" method="POST" enctype="multipart/form-data">
          @csrf
        <div class="mb-3">
            <label for="exampleDataList" class="form-label">Tipe Sertifikat</label>
            <select required class="form-select" aria-label="Default select example" method="POST" enctype="multipart/form-data" name="tipe_sertifikat">
              <option value="Sertifikat Terima Kasih">Sertifikat Terima Kasih</option>
              <option value="Sertifikat dengan Nama">Sertifikat dengan Nama</option>
            </select>
            </div>
        
        <div class="mb-3">
        <label for="exampleDataList" class="form-label">Kementrian Yang Mengajukan</label>
        <select required class="form-select" aria-label="Default select example" action name="kementrian_yang_mengajukan">
          <option value="KHMK">KHMK</option>
          <option value="MENKEU">MENKEU</option>
          <option value="KESKAB">KESKAB</option>
          <option value="HUBLU">HUBLU</option>
          <option value="SINPUS">SINPUS</option>
          <option value="KOMINFO">KOMINFO</option>
          <option value="KWU">KWU</option>
          <option value="MENBUD">MENBUD</option>
          <option value="SOSLINDUP">SOSLINDUP</option>
          <option value="PEMDES">PEMDES</option>
          <option value="JAKNAS">JAKNAS</option>
          <option value="JAKDA">JAKDA</option>
          <option value="ADKESMA">ADKESMA</option>
          <option value="MIBAT">MIBAT</option>
          <option value="PSDM">PSDM</option>
          <option value="RISBANG">RISBANG</option>
        </select>
        </div>

        <div class="mb-3">
          <label for="exampleDataList" class="form-label">Jabatan</label>
          <select required class="form-select" aria-label="Default select example" name="jabatan">
            <option value="Peserta">Peserta</option>
            <option value="Moderator">Moderator</option>
            <option value="Pembicara">Pembicara</option>
            <option value="Panitia">Panitia</option>
          </select>
          </div>

        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Deskripsi Kegiatan</label>
            <textarea required class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsi_kegiatan" ></textarea>
        </div>

        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Nama Lengkap Pembicara/Moderator</label>
          <input required type="text" class="form-control" name="nama_lengkap_pembicara" id="exampleFormControlInput1" placeholder="I Gusti Nyoman">
        </div>

        <div class="mb-3">
          <label for="formFile" class="form-label">File Excel Nama Peserta/Panitia</label>
          <input required class="form-control" type="file" id="formFile" name="file_excel_nama">
      </div> 

        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Nomor Sertifikat</label>
          <input required type="text" class="form-control" id="exampleFormControlInput1" placeholder="43.001/BEM-UNUD/VII/2021" name="nomor_sertif">
        </div>

        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Nama Kegiatan</label>
          <input required type="text" class="form-control" id="exampleFormControlInput1" name="nama_kegiatan" placeholder="Ex : Kelas Multimedia">
        </div>

        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Hari, Tanggal</label>
          <input required type="date" class="form-control" id="exampleFormControlInput1" placeholder="28 Februari 2021" name="hari_tanggal">
        </div>

        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Bertempat di</label>
          <input required type="text" class="form-control" id="exampleFormControlInput1" name="bertempat_di" placeholder="Ex : Kab Gianyar">
        </div>

        <div class="mb-3">
          <label for="exampleDataList" class="form-label">Cap</label>
          <select required class="form-select" aria-label="Default select example" name="cap">
            <option value="Basah">Basah</option>
            <option value="Digital">Digital</option>
          </select>
          </div>

        <div class="mb-3">
            <label for="exampleDataList" class="form-label">Apakah Ingin Menambahkan Tanda Tangan Menteri</label>
            <select required class="form-select" aria-label="Default select example" id="is_sign" name="tambah_ttd_menteri">
              <option value="" selected disabled>Pilih Opsi</option>
              <option value="Ya">Ya</option>
              <option value="Tidak">Tidak</option>
            </select>
        </div>  

        <div class="is_sign_form d-none">
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Nama Lengkap Menteri</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" name="nama_lengkap_menteri">
        </div>

        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">NIM Menteri</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" name="nim_menteri">
        </div>

        <div class="mb-3">
          <label for="formFile" class="form-label">File Tanda Tangan Menteri</label>
          <input class="form-control" type="file" id="formFile" name="file_ttd_menteri">
        </div> 
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <button class="btn btn-primary me-md-2" type="submit" value="Upload">Submit</button>
        </div>
        </form>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script>
    $('#is_sign').on('change', function(){
      var sign_val = $(this).val();
      console.log(sign_val);
      if (sign_val === 'Ya') {
        $('.is_sign_form').removeClass('d-none');
      }else{
        $('.is_sign_form').addClass('d-none');
      }
    })
  </script>
  </body>
</html>