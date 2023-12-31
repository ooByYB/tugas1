@extends('king.master')

@section('title', 'Petugas')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Petugas</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Petugas</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Form Petugas</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('petugas.store')}}" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="id">ID Petugas</label>
                                    <input class="form-control" type="text" name="id" id="id" placeholder="Masukan ID">
                                </div>
                                <div class="form-group">
                                    <label for="nama_petugas">Nama</label>
                                    <input class="form-control" type="text" name="nama_petugas" id="nama_petugas" placeholder="Masukan Nama Petugas">
                                </div>
                                <div class="form-group">
                                    <label for="jabatan_petugas">Jabatan</label>
                                    <input class="form-control" type="text" name="jabatan_petugas" id="judul" placeholder="Masukan Jabatan Petugas">
                                </div>

                                <div class="form-group">
                                    <label>No Tlp.</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                        </div>
                                        <input type="number" class="form-control" name="tlp_petugas" data-inputmask='"mask": "(999) 999-9999"' data-mask placeholder="Masukan No Telepon">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="alamat_petugas" name="alamat_petugas" id="alamat_petugas">Alamat</label>
                                    <input class="form-control" type="text" name="alamat_petugas" id="alamat_petugas" placeholder="Masukan Alamat">
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <input type="button" class="btn btn-danger" value="Kembali" onclick="history.back()">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content -->
</div>
@endsection