@extends('layout.admin')

@section('contentpsntampil')

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
                            <li class="breadcrumb-item active">Update Data Pasien</li>
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
                    <form action="/updatedatapasien/{{ $pasplg->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">No.Rm</label>
                          <input type="text" name="no_rm" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pasplg->no_rm}}">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Nama</label>
                          <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pasplg->nama}}">
                        </div>
                        <div class="form-group">
                          <label for="started at">
                            Tgl Lahir
                          </label>
                          <input type="date" id="started at" name="tgllahir" class="form-control" value="{{$pasplg->tgllahir}}">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                          <select class="form-select" name="jeniskelamin" aria-label="Default select example">
                            <option selected>{{$pasplg->jeniskelamin}}</option>
                            <option value="L">L</option>
                            <option value="P">P</option>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Ruang</label>
                          <input type="text" name="ruang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pasplg->ruang}}">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Kelas</label>
                          <input type="text" name="kelas" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pasplg->kelas}}">
                        </div>
                        <div class="form-group">
                          <label for="started at">
                            Tgl Masuk
                          </label>
                          <input type="date" id="started at" name="tglmasuk" class="form-control" value="{{$pasplg->tglmasuk}}">
                        </div>
                        <div class="form-group">
                          <label for="started at">
                            Tgl Keluar
                          </label>
                          <input type="date" id="started at" name="tglkeluar" class="form-control" value="{{$pasplg->tglkeluar}}">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Dokter Merawat</label>
                          <input type="text" name="doktermerawat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pasplg->doktermerawat}}">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Diagnosa Masuk</label>
                          <input type="text" name="diagnosamasuk" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pasplg->diagnosamasuk}}">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Indikasi Rawat</label>
                          <input type="text" name="indikasirawat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pasplg->indikasirawat}}">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Diagnosa Keluar</label>
                          <input type="text" name="diagnosakeluar" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pasplg->diagnosakeluar}}">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Kode ICD-10</label>
                          <input type="text" name="kodeicd_10" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pasplg->kodeicd_10}}">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Komplikasi</label>
                          <input type="text" name="komplikasi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pasplg->komplikasi}}">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Komorbid</label>
                          <input type="text" name="komorbid" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pasplg->komorbid}}">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Tindakan</label>
                          <input type="text" name="tindakan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pasplg->tindakan}}">
                        </div>
                        <div class="form-group">
                          <label for="started at">
                            Tgl Dilakukan
                          </label>
                          <input type="date" id="started at" name="tgldilakukan" class="form-control" value="{{$pasplg->tgldilakukan}}">
                        </div>
                        <!-- <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Tgl Dilakukan</label>
                          <input type="text" name="tgldilakukan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pasplg->tgldilakukan}}">
                        </div> -->
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Kode ICD-9CM</label>
                          <input type="text" name="kodeicd_9cm" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pasplg->kodeicd_9cm}}">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Keluhan Utama</label>
                          <input type="text" name="keluhanutama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pasplg->keluhanutama}}">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Gejala Penyerta</label>
                          <input type="text" name="gejalapenyerta" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pasplg->gejalapenyerta}}">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Penyakit Dahulu</label>
                          <input type="text" name="penyakitdahulu" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pasplg->penyakitdahulu}}">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Pemeriksaan Fisik</label>
                          <input type="text" name="pemeriksaanfisik" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pasplg->pemeriksaanfisik}}">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Pemeriksaan Penunjang</label>
                          <input type="text" name="pemeriksaanpenunjang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pasplg->pemeriksaanpenunjang}}">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Laboratorium</label>
                          <input type="text" name="laboratorium" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pasplg->laboratorium}}">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Pencintraan Diagnostik</label>
                          <input type="text" name="pencintraandiagnostik" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pasplg->pencintraandiagnostik}}">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Lainnya</label>
                          <input type="text" name="lainnya" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pasplg->lainnya}}">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Konsultasi</label>
                          <input type="text" name="konsultasi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pasplg->konsultasi}}">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Obat Selama Rawat</label>
                          <input type="text" name="obatselamarawat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pasplg->obatselamarawat}}">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Kondisi Saat Pulang</label>
                          <input type="text" name="kondisisaatpulang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pasplg->kondisisaatpulang}}">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Obat Pulang</label>
                          <input type="text" name="obatpulang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pasplg->obatpulang}}">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Kontrol Ulang</label>
                          <input type="text" name="kontrolulang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pasplg->kontrolulang}}">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Bawa RS Bila</label>
                          <input type="text" name="bawarsbila" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pasplg->bawarsbila}}">
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
