<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Data Pasien Balita</title>
</head>

<body>
    <h1 class="text-center mb-4">Tambah Data Pasien Balita</h1>
    <div class="container">
        <div class="row">
          <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <form action="/insertdatapasienblt" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">No.Rm</label>
                          <input type="text" name="no_rm" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Nama</label>
                          <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                          <label for="started at">
                            Tgl Lahir
                          </label>
                          <input type="date" id="started at" name="tgllahir" class="form-control">
                        </div>
                        <!-- <div class="mb-3">
                          <label for="exampleInputEmail" class="form-label">Tgl Lahir</label>
                          <input type="text" name="tgllahir" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div> -->
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                          <select class="form-select" name="jeniskelamin" aria-label="Default select example">
                            <option selected>Pilih Jenis Kelamin</option>
                            <option value="L">L</option>
                            <option value="P">P</option>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Ruang</label>
                          <input type="text" name="ruang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Kelas</label>
                          <input type="text" name="kelas" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                          <label for="started at">
                            Tgl Masuk
                          </label>
                          <input type="date" id="started at" name="tglmasuk" class="form-control">
                        </div>
                        <!-- <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Tgl Masuk</label>
                          <input type="text" name="tglmasuk" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div> -->
                        <div class="form-group">
                          <label for="started at">
                            Tgl Keluar
                          </label>
                          <input type="date" id="started at" name="tglkeluar" class="form-control">
                        </div>
                        <!-- <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Tgl keluar</label>
                          <input type="text" name="tglkeluar" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div> -->
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Dokter Merawat</label>
                          <input type="text" name="doktermerawat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Diagnosa Masuk</label>
                          <input type="text" name="diagnosamasuk" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Indikasi Rawat</label>
                          <input type="text" name="indikasirawat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Diagnosa Keluar</label>
                          <input type="text" name="diagnosakeluar" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Kode ICD-10</label>
                          <input type="text" name="kodeicd_10" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Komplikasi</label>
                          <input type="text" name="komplikasi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Komorbid</label>
                          <input type="text" name="komorbid" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Tindakan</label>
                          <input type="text" name="tindakan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                          <label for="started at">
                            Tgl Dilakukan
                          </label>
                          <input type="date" id="started at" name="tgldilakukan" class="form-control">
                        </div>
                        <!-- <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Tgl Dilakukan</label>
                          <input type="text" name="tgldilakukan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div> -->
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Kode ICD-9CM</label>
                          <input type="text" name="kodeicd_9cm" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Keluhan Utama</label>
                          <input type="text" name="keluhanutama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Gejala Penyerta</label>
                          <input type="text" name="gejalapenyerta" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Penyakit Dahulu</label>
                          <input type="text" name="penyakitdahulu" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">BB</label>
                          <input type="text" name="bb" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">TB</label>
                          <input type="text" name="tb" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Pemeriksaan Penunjang</label>
                          <input type="text" name="pemeriksaanpenunjang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Laboratorium</label>
                          <input type="text" name="laboratorium" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Pencintraan Diagnostik</label>
                          <input type="text" name="pencintraandiagnostik" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Lainnya</label>
                          <input type="text" name="lainnya" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Konsultasi</label>
                          <input type="text" name="konsultasi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Obat Selama Rawat</label>
                          <input type="text" name="obatselamarawat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Kondisi Saat Pulang</label>
                          <input type="text" name="kondisisaatpulang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Obat Pulang</label>
                          <input type="text" name="obatpulang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Kontrol Ulang</label>
                          <input type="text" name="kontrolulang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Bawa RS Bila</label>
                          <input type="text" name="bawarsbila" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Simpan</button>
                      </form>
                </div>
               </div>
          </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>