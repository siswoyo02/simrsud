<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Data Pegawai</title>
</head>

<body>
    <h1 class="text-center mb-4">Pegawai</h1>
    <div class="container">
        <a href="/tambahpegawai" type="button" class="btn btn-success mb-2">Tambah</a>
        <div class="row g-3 align-items-center mt-2">
            <div class="col-auto">
            <form action="/pegawai" method="GET">
                <input type="search" id="inputPassword6" name="search" class="form-control mb-2" aria-describedby="passwordHelpInline">
            </form>
            </div>
        </div>
        <div class="row">
            <!-- <div class="card"> -->
            <table class="table table-striped table-bordered ">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">No telpon</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($pgw as $item)
                    <tr>
                        <th scope="row">{{ $no++ }}</th>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->jenis_kelamin }}</td>
                        <td>{{ $item->notelpon }}</td>
                        <td>

                            <a href="/tampildatapegawai/{{ $item->id }}" class="btn btn-info">Edit</a>
                            <a href="/deletedatapegawai/{{ $item->id }}" class="btn btn-danger">Hapus</a>
                            <a href="/exportpdfdatapegawai/{{ $item->id }}" class="btn btn-secondary">Print</a>

                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        <!-- </div> -->
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.3.slim.js" integrity="sha256-DKU1CmJ8kBuEwumaLuh9Tl/6ZB6jzGOBV/5YpNE2BWc=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>
<script>
    $('.delete').click(function() {
        var pegawainama = $(this).attr('pgw-nama');

        swal({
                title: "Akan dihapus ?",
                text: "Data pegawai ini " + pegawainama + " akan di hapus ",
                icon: "Peringatan",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    swal("File sudah terhapus!", {
                        icon: "sukses",
                    });
                } else {
                    swal("File masih tersimpan !");
                }
            });
    });
</script>

</html>