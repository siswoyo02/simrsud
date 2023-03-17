@extends('layout.admin')

@section('contentpgw')

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
                            <li class="breadcrumb-item active">Data Pegawai</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

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
                        <th scope="col">no rm</th>
                        <th scope="col">nama</th>
                        <th scope="col">sex</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($data1 as $index => $item)
                        <tr>
                            <th scope="row">{{ $index + $data1->firstItem() }}</th>
                        <td>{{ $item->no_rm }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->sex }}</td>
                        <td>

                            <a href="/tampildatapegawai/{{ $item->id }}" class="btn btn-info">Edit</a>
                            <a href="/deletedatapegawai/{{ $item->id }}" class="btn btn-danger">Hapus</a>
                            <!-- <a href="/exportpdfdatapegawai/{{ $item->id }}" class="btn btn-secondary">Print</a> -->

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $pgw->links('pagination::Bootstrap-4') }}
        </div>
        <!-- </div> -->
    </div>

    </div>



    @endsection