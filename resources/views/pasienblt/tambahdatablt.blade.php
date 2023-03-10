@extends('layout.admin')

@section('contentpsnblttambah')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">Tambah Data Pasien Balita</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

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
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Dokter Merawat</label>
                          <select class="form-select" name="doktermerawat" aria-label="Default select example">
                            <option selected>Pilih Dokter </option>
                            <option value="Ratna Kartini">Dr. Ratna Kartini</option>
                            <option value="Rr Noverita">Dr. Rr Noverita</option>
                            <option value="Ahmad Zakky">Dr. Ahmad Zakky</option>
                          </select>
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
                          <label for="exampleInputEmail1" class="form-label">Tindakan / Operasi</label>
                          <select class="form-select" name="tindakan" aria-label="Default select example">
                            <option selected>Pilihan </option>
                            <option value="O2 Nasal">O2 Nasal</option>
                            <option value="O2 JR">O2 JR</option>
                            <option value="NCO PUFF">NCO PUFF</option>
                            <option value="Transfusi">Transfusi</option>
                            <option value="Foto Therapi">Foto Therapi</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="started at">
                            Tgl Dilakukan
                          </label>
                          <input type="date" id="started at" name="tgldilakukan" class="form-control">
                        </div>
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
                          <label for="exampleInputEmail1" class="form-label">BB ( gram )</label>
                          <input type="text" name="bb" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">TB ( cm )</label>
                          <input type="text" name="tb" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">AS (1')</label>
                          <select class="form-select" name="as1" aria-label="Default select example">
                            <option selected>Pilihan</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">AS (5')</label>
                          <select class="form-select" name="as5" aria-label="Default select example">
                            <option selected>Pilihan</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">DS</label>
                          <select class="form-select" name="ds" aria-label="Default select example">
                            <option selected>Pilihan</option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Cacat</label>
                          <input type="text" name="cacat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Kreamer</label>
                          <select class="form-select" name="kreamer" aria-label="Default select example">
                            <option selected>Pilihan</option>
                            <option value="I">I</option>
                            <option value="II">II</option>
                            <option value="III">III</option>
                            <option value="IV">IV</option>
                            <option value="V">V</option>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Tali Pusar</label>
                          <select class="form-select" name="talipusar" aria-label="Default select example">
                            <option selected>Pilihan</option>
                            <option value="Segar">Segar</option>
                            <option value="Layu">Layu</option>
                            <option value="Lepas Pusar">Lepas Pusar</option>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Ketuban</label>
                          <select class="form-select" name="ketuban" aria-label="Default select example">
                            <option selected>Pilihan</option>
                            <option value="Jernih">Jernih</option>
                            <option value="Keruh">Keruh</option>
                            <option value="Darah">Darah</option>
                            <option value="Meconceal">Meconceal</option>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Lahir</label>
                          <select class="form-select" name="lahir" aria-label="Default select example">
                            <option selected>Pilihan</option>
                            <option value="SC">SC</option>
                            <option value="Spontan">Spontan</option>
                            <option value="VE">VE</option>
                            <option value="Forceps">Forceps</option>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Rujukan</label>
                          <select class="form-select" name="rujukan" aria-label="Default select example">
                            <option selected>Pilihan</option>
                            <option value="Datang Sendiri">Datang Sendiri</option>
                            <option value="RS Lain">RS Lain</option>
                            <option value="BPS">BPS</option>
                            <option value="Puskesmas Setempat">Puskesmas Setempat</option>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Anus</label>
                          <select class="form-select" name="anus" aria-label="Default select example">
                            <option selected>Pilihan</option>
                            <option value="Ada">Ada</option>
                            <option value="Tidak Ada">Tidak Ada</option>
                          </select>
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
                          <select class="form-select" name="kontrolulang" aria-label="Default select example">
                            <option selected>Pilihan </option>
                            <option value="Poli Anak RSUD Tuban">Poli Anak RSUD Tuban</option>
                            <option value="Puskesmas Setempat">Puskesmas Setempat</option>
                            <option value="Dokter Spesialis Setempat">Dokter Spesialis Setempat</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="started at">
                            Tgl Kontrol
                          </label>
                          <input type="date" id="started at" name="tglkontrol" class="form-control">
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

    </div>
  @endsection
