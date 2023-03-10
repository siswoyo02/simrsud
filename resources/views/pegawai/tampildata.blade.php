@extends('layout.admin')

@section('contentpgwtambah')

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
                            <li class="breadcrumb-item active">Update Data Pegawai</li>
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
                    <form action="/updatedatapegawai/{{ $pgw->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Nama</label>
                          <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pgw->nama}}">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                          <select class="form-select" name="jenis_kelamin" aria-label="Default select example">
                            <option selected>{{$pgw->jenis_kelamin}}</option>
                            <option value="L">L</option>
                            <option value="P">P</option>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">No Telpon</label>
                          <input type="number" name="notelpon" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pgw->notelpon}}">
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