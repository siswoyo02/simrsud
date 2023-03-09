@extends('layout.admin')

@section('contentpsn')

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
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Data Pasien</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <div class="container">
        <a href="/tambahpasien" type="button" class="btn btn-success mb-2">Tambah</a>
        <div class="row g-3 align-items-center mt-2">
            <div class="col-auto">
            <form action="/pasien" method="GET">
                <input type="search" id="inputPassword6" name="search" class="form-control mb-2" aria-describedby="passwordHelpInline">
            </form>
            </div>
        </div>
        <div class="row">
            <div class="card">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">No.RM</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Tgl Lahir</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Ruang</th>
                            <th scope="col">Kelas</th>
                            
                            <th scope="col">Tgl Masuk</th>
                            <th scope="col">Tgl Keluar</th>
                            {{-- <th scope="col">Dokter Merawat</th>
                            <th scope="col">Diagnosa Masuk</th>
                            <th scope="col">Indikasi Rawat</th>
                            <th scope="col">Diagnosa Keluar</th>
                            <th scope="col">Kode ICD-10</th>
                            <th scope="col">Komplikasi</th>
                            <th scope="col">Komorbid</th>
                            <th scope="col">Tindakan</th>
                            <th scope="col">Tgl Dilakukan</th>
                            <th scope="col">Kode ICD-9CM</th>

                            <th scope="col">Keluhan Utama</th>
                            <th scope="col">Gejala Penyerta</th>
                            <th scope="col">Penyakit Dahulu</th>
                            <th scope="col">Pemeriksaan Fisik</th>
                            <th scope="col">Pemeriksaan Penunjang</th>
                            <th scope="col">Laboratorium</th>
                            <th scope="col">Pencintraan Diagnostik</th>
                            <th scope="col">Lainnya</th>
                            <th scope="col">Konsultasi</th>
                            <th scope="col">Obat Selama Rawat</th>
                            <th scope="col">Kondisi Saat Pulang</th>
                            <th scope="col">Obat Pulang</th>

                            <th scope="col">Kontrol Ulang</th>
                            <th scope="col">Bawa RS Bila</th> --}}
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($pasplg as $pp)
                            <tr>
                                <th scope="row">{{ $no++ }}</th>
                                <td>{{ $pp->no_rm }}</td>
                                <td>{{ $pp->nama }}</td>
                                <td>{{ $pp->tgllahir }}</td>
                                <td>{{ $pp->jeniskelamin }}</td>
                                <td>{{ $pp->ruang }}</td>
                                <td>{{ $pp->kelas }}</td>

                                <td>{{ $pp->tglmasuk }}</td>
                                <td>{{ $pp->tglkeluar }}</td>
                                {{-- <td>{{ $pp->doktermerawat }}</td>
                                <td>{{ $pp->diagnosamasuk }}</td>
                                <td>{{ $pp->indikasirawat }}</td>
                                <td>{{ $pp->diagnosakeluar }}</td>
                                <td>{{ $pp->kodeicd_10 }}</td>
                                <td>{{ $pp->komplikasi }}</td>
                                <td>{{ $pp->komorbid }}</td>
                                <td>{{ $pp->tindakan }}</td>
                                <td>{{ $pp->tgldilakukan }}</td>
                                <td>{{ $pp->kodeicd_9cm }}</td>

                                <td>{{ $pp->keluhanutama }}</td>
                                <td>{{ $pp->gejalapenyerta }}</td>
                                <td>{{ $pp->penyakitdahulu }}</td>
                                <td>{{ $pp->pemeriksaanfisik }}</td>
                                <td>{{ $pp->pemeriksaanpenunjang }}</td>
                                <td>{{ $pp->laboratorium }}</td>
                                <td>{{ $pp->pencintraandiagnostik }}</td>
                                <td>{{ $pp->lainnya }}</td>
                                <td>{{ $pp->konsultasi }}</td>
                                <td>{{ $pp->obatselamarawat }}</td>
                                <td>{{ $pp->kondisisaatpulang }}</td>
                                <td>{{ $pp->obatpulang }}</td>

                                <td>{{ $pp->kontrolulang }}</td>
                                <td>{{ $pp->bawarsbila }}</td>  --}}
                                <td>
                                    <a href="/tampildatapasien/{{$pp->id}}" class="btn btn-info">Edit</a>
                                    <a href="/exportpdfdatapasien/{{ $pp->id }}" class="btn btn-secondary">Print</a>
                                    <a href="/deletedatapasien/{{$pp->id}}" class="btn btn-danger">Hapus</a>
    
                                </td>
                            </tr>                    
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    </div>



    @endsection