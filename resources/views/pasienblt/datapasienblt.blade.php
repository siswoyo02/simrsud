@extends('layout.admin')

@section('contentpsnblt')

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
                        <li class="breadcrumb-item active">Data Pasien Balita</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class="container">
        <a href="/tambahpasienblt" type="button" class="btn btn-success mb-2">Tambah</a>
        <div class="row g-3 align-items-center mt-2">
            <div class="col-auto">
                <form action="/pasienblt" method="GET">
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
                            <th scope="col">BB</th>
                            <th scope="col">TB</th>
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
                        @foreach ($pasplgblt as $index => $ppb)
                        <tr>
                            <th scope="row">{{ $index + $pasplgblt->firstItem() }}</th>
                            <td>{{ $ppb->no_rm }}</td>
                            <td>{{ $ppb->nama }}</td>
                            <td>{{ $ppb->tgllahir }}</td>
                            <td>{{ $ppb->jeniskelamin }}</td>
                            <td>{{ $ppb->ruang }}</td>
                            <td>{{ $ppb->kelas }}</td>

                            <td>{{ $ppb->tglmasuk }}</td>
                            <td>{{ $ppb->tglkeluar }}</td>
                            {{-- <td>{{ $ppb->doktermerawat }}</td> 
                            <td>{{ $ppb->indikasirawat }}</td>
                            <td>{{ $ppb->diagnosakeluar }}</td>
                            <td>{{ $ppb->kodeicd_10 }}</td>
                            <td>{{ $ppb->komplikasi }}</td>
                            <td>{{ $ppb->komorbid }}</td>
                            <td>{{ $ppb->tindakan }}</td>
                            <td>{{ $ppb->tgldilakukan }}</td>
                            <td>{{ $ppb->kodeicd_9cm }}</td>

                            <td>{{ $ppb->keluhanutama }}</td>
                            <td>{{ $ppb->gejalapenyerta }}</td>
                            <td>{{ $ppb->penyakitdahulu }}</td>
                            <td>{{ $ppb->bb }}</td>
                            <td>{{ $ppb->tb }}</td>
                            <td>{{ $ppb->pemeriksaanpenunjang }}</td>
                            <td>{{ $ppb->laboratorium }}</td>
                            <td>{{ $ppb->pencintraandiagnostik }}</td>
                            <td>{{ $ppb->lainnya }}</td>
                            <td>{{ $ppb->konsultasi }}</td>
                            <td>{{ $ppb->obatselamarawat }}</td>
                            <td>{{ $ppb->kondisisaatpulang }}</td>
                            <td>{{ $ppb->obatpulang }}</td>

                            <td>{{ $ppb->kontrolulang }}</td>
                            <td>{{ $ppb->bawarsbila }}</td> --}}
                            <td>
                                <a href="/tampildatapasienblt/{{$ppb->id}}" class="btn btn-info">Edit</a>
                                <a href="/exportpdfdatapasienblt/{{ $ppb->id }}" class="btn btn-secondary">Print</a>
                                <a href="/deletedatapasienblt/{{$ppb->id}}" class="btn btn-danger">Hapus</a>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $pasplgblt->links('pagination::Bootstrap-4') }}
            </div>
        </div>
    </div>

</div>



@endsection