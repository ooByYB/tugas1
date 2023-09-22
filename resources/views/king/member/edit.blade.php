@extends('king.master')
@section('title', 'Edit Anggota')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Anggota</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Anggota</a></li>
                        <li class="breadcrumb-item active">Edit Anggota</li>
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
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">Form Edit Anggota : {{ $anggota[0]->nama }}</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('anggota.update', $anggota[0]->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="id">ID Anggota</label>
                                    <input type="text" class="form-control @error('id') is-invalid @enderror" name="id" id="id" placeholder="Masukkan ID" value="{{ $anggota[0]->id }}">
                                </div>
                                @error('id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="kode_anggota">Kode Anggota</label>
                                    <input type="text" class="form-control @error('kode') is-invalid @enderror" name="kode" id="kode_anggota" placeholder="Masukan Kode Anggota" value="{{ $anggota[0]->kode }}">
                                </div>
                                @error('kode')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" placeholder="Masukan Nama Anggota" value="{{ $anggota[0]->nama }}">
                                </div>
                                @error('nama')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="jk">Jenis Kelamin</label>
                                    <select class="custom-select" name="jk" value="{{ $anggota[0]->jk }}">
                                        <option selected disabled>Pilih Jenis Kelamin</option>
                                        <option>Laki-Laki</option>
                                        <option>Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Jurusan</label>
                                    <select class="custom-select" name="jurusan" value="{{ $anggota[0]->jurusan }}">
                                        <option selected disabled>Pilih Jurusan</option>
                                        <option>RPL</option>
                                        <option>DPIB</option>
                                        <option>TP</option>
                                        <option>TFLM</option>
                                        <option>TEI</option>
                                        <option>TITL</option>
                                        <option>TKJ</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>No Tlp.</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                        </div>
                                        <input type="number" class="form-control @error('tlp') is-invalid @enderror" name="tlp" data-inputmask='"mask": "(999) 999-9999"' data-mask placeholder="Masukan Nomer Telepon" value="{{ $anggota[0]->tlp }}">
                                    </div>
                                </div>
                                @error('tlp')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea class="form-control @error('alamat') is-invalid @enderror" rows="3" name="alamat" placeholder="Masukan Alamat">{{ $anggota[0]->alamat }}</textarea>
                                </div>
                                @error('alamat')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-warning">Submit</button>
                                <input type="button" class="btn btn-danger" value="Kembali" onclick="history.back()">
                            </div>
                            <!-- /.content -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content -->
</div>
@endsection