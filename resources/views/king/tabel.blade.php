@extends('king.master')

@section('title', 'Data Inputan')

@section('content')

@push('css')
<link rel="stylesheet" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@push('script')
<script src="{{ asset('admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('admin/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('admin/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('admin/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
@endpush

<!-- Main content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Inputan Perpustakaan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Perpustakaan</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Data Buku</h3>
                        </div>
                        <!-- /.card-header -->
                        <table class="table table-head-fixed text-nowrap">
                            <thead>
                                <tr>
                                    <th>Kode</th>
                                    <th>Judul</th>
                                    <th>Penulis</th>
                                    <th>Penerbit</th>
                                    <th>Terbit</th>
                                    <th>Stok</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($buku as $key => $value)
                                <tr>
                                    <td>{{ $value->kode }}</td>
                                    <td>{{ $value->judul }}</td>
                                    <td>{{ $value->penulis }}</td>
                                    <td>{{ $value->penerbit }}</td>
                                    <td>{{ $value->tahun_terbit }}</td>
                                    <td>{{ $value->stok }}</td>
                                    <td>
                                        <form action="{{ route('buku.destroy', $value->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                            <a href="{{ route('buku.show', $value->id) }}" class="btn-sm btn-info">Show</a>
                                            <a href="{{ route('buku.edit', $value->id)}}" class="btn-sm btn-warning">Edit</a>
                                            <button type="submit" class="btn-sm btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td>Data Masih Kosong</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                        </br>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Data Anggota</h3>
                        </div>
                        <table class="table table-head-fixed text-nowrap">
                            <thead>
                                <tr>
                                    <th>Kode</th>
                                    <th>Nama</th>
                                    <th>Kelamin</th>
                                    <th>Jurusan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($anggota as $key => $value)
                                <tr>
                                    <td>{{ $value->kode }}</td>
                                    <td>{{ $value->nama }}</td>
                                    <td>{{ $value->jk }}</td>
                                    <td>{{ $value->jurusan }}</td>
                                    <td>
                                        <form action="{{ route('anggota.destroy', $value->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                            <a href="{{ route('anggota.show', $value->id) }}" class="btn-sm btn-info">Show</a>
                                            <a href="{{ route('anggota.edit', $value->id) }}" class="btn-sm btn-warning">Edit</a>
                                            <button type="submit" class="btn-sm btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>

                                @empty
                                <tr>
                                    <td>Data Masih Kosong</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Data Petugas</h3>
                        </div>
                        <table class="table table-head-fixed text-nowrap">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Jabatan</th>
                                    <th>Telepon</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($petugas as $key => $value)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $value->nama_petugas }}</td>
                                        <td>{{ $value->jabatan_petugas }}</td>
                                        <td>{{ $value->tlp_petugas }}</td>

                                        <td>
                                            <form action="{{ route('petugas.destroy', $value->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                                <a href="{{ route('petugas.show', $value->id) }}" class="btn-sm btn-info">Show</a>
                                                <a href="{{ route('petugas.edit', $value->id) }}" class="btn-sm btn-warning">Edit</a>
                                                <button type="submit" class="btn-sm btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>

                                    @empty
                                    <tr>
                                        <td>Data Masih Kosong</td>
                                    </tr>
                                    @endforelse
                            </tbody>
                        </table>
                        <div class="card-footer">
                            <input type="button" class="btn btn-danger" value="Kembali" onclick="history.back()">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content -->
</div>
@endsection
