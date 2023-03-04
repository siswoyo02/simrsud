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
    <h1 class="text-center mb-4">Pasien Pulang Balita</h1>
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
                            
                            {{-- <th scope="col">Tgl Masuk</th>
                            <th scope="col">Tgl Keluar</th>
                            <th scope="col">Dokter Merawat</th>
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
                        @foreach ($pasplgblt as $ppb)
                            <tr>
                                <th scope="row">{{ $no++ }}</th>
                                <td>{{ $ppb->no_rm }}</td>
                                <td>{{ $ppb->nama }}</td>
                                <td>{{ $ppb->tgllahir }}</td>
                                <td>{{ $ppb->jeniskelamin }}</td>
                                <td>{{ $ppb->ruang }}</td>
                                <td>{{ $ppb->kelas }}</td>

                                {{-- <td>{{ $ppb->tglmasuk }}</td>
                                <td>{{ $ppb->tglkeluar }}</td>
                                <td>{{ $ppb->doktermerawat }}</td> --}}
                                {{-- <td>{{ $ppb->indikasirawat }}</td>
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
                                <td>{{ $ppb->bawarsbila }}</td>  --}}
                                <td>
                                    <a href="/tampildatapasienblt/{{$ppb->id}}" class="btn btn-info">Edit</a>
                                    <a href="/exportpdfdatapasienblt/{{ $ppb->id }}" class="btn btn-secondary">Print</a>
                                    <a href="/deletedatapasienblt/{{$ppb->id}}" class="btn btn-danger">Hapus</a>
    
                                </td>
                            </tr>                    
                        @endforeach
                    </tbody>
                </table>
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