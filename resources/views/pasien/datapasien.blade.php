<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Data Pasien</title>
</head>
<body>
    <h1 class="text-center mb-4">Pasien Pulang</h1>
    <div class="container">
        <a href="/tambahpasien" type="button" class="btn btn-success mb-2">Tambah</a>
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
                            <th scope="col">Dokter Merawat</th> --}}
                            {{-- <th scope="col">Diagnosa Masuk</th>
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
                        @foreach ($pasplg as $pp)
                            <tr>
                                <th scope="row">{{ $pp->id }}</th>
                                <td>{{ $pp->no_rm }}</td>
                                <td>{{ $pp->nama }}</td>
                                <td>{{ $pp->tgllahir }}</td>
                                <td>{{ $pp->jeniskelamin }}</td>
                                <td>{{ $pp->ruang }}</td>
                                <td>{{ $pp->kelas }}</td>

                                {{-- <td>{{ $pp->tglmasuk }}</td>
                                <td>{{ $pp->tglkeluar }}</td>
                                <td>{{ $pp->doktermerawat }}</td> --}}
                                {{-- <td>{{ $pp->indikasirawat }}</td>
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
                                    <button type="button" class="btn btn-info">Edit</button>
                                    <button type="button" class="btn btn-secondary">Print</button>
                                    <button type="button" class="btn btn-danger">Hapus</button>
    
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