@extends('king.master')
@section('title', 'Peminjaman')

@section('content')
    <!-- Main content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Peminjaman</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Peminjaman</li>
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
                            <h3 class="card-title">Data Peminjaman</h3>
                        </div>
                        <!-- /.card-header -->
                        <table class="table table-head-fixed text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>User</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Reason</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Nayif Aditya</td>
                                    <td>23-07-2023</td>
                                    <td><span class="tag tag-success">Pinjam</span></td>
                                    <td>Kebutuhan Tugas Sekolah.</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Rizki Ali Hamdani</td>
                                    <td>20-07-2023</td>
                                    <td><span class="tag tag-warning">Pinjam</span></td>
                                    <td>Kebutuhan Tugas Sekolah.</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Damar Setyo Mulia</td>
                                    <td>16-07-2023</td>
                                    <td><span class="tag tag-primary">Kembali</span></td>
                                    <td>Memahami Isi Buku.</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Fauzian Rahmat Shidiq</td>
                                    <td>15-07-2023</td>
                                    <td><span class="tag tag-danger">Kembali</span></td>
                                    <td>Memahami Isi Buku.</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Dede Suryana</td>
                                    <td>14-07-2023</td>
                                    <td><span class="tag tag-success">Pinjam</span></td>
                                    <td>Kebutuhan Tugas Sekolah.</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>M Raeynal Afgani Alfadillah</td>
                                    <td>13-07-2023</td>
                                    <td><span class="tag tag-warning">Pinjam</span></td>
                                    <td>Memahami Isi Buku.</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Saifulloh Fattah Bintoro</td>
                                    <td>12-07-2023</td>
                                    <td><span class="tag tag-primary">Kembali</span></td>
                                    <td>Memahami Isi Buku.</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Aria Wira Tanu</td>
                                    <td>11-07-2023</td>
                                    <td><span class="tag tag-danger">Kembali</span></td>
                                    <td>Membaca Buku.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content -->
    </div>
@endsection