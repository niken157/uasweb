
@extends('template')

@section('main')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Buku Perpustakaan</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Buku</h6>
            <a class="btn btn-primary" href="http://localhost:8000/buku/tambah" role="button"><i class="fas fa-fw fa-plus"></i> Tambah Data</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Kode Buku</th>
                            <th>Judul Buku</th>
                            <th>gambar</th>
                            <th>Pengarang</th>
                            <th>Penerbit</th>
                            <th>Stok</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Kode Buku</th>
                            <th>Judul Buku</th>
                            <th>gambar</th>
                            <th>Pengarang</th>
                            <th>Penerbit</th>
                            <th>Stok</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($buku as $b)
                        <tr>
                            <td>{{ $b->kodebuku }}</td>
                            <td>{{ $b->judul }}</td>
                            <td><img height="200" width="130" src="/user/img/buku/{{ $b->gambar }}"></td>
                            <td>{{ $b->pengarang }}</td>
                            <td>{{ $b->penerbit }}</td>
                            <td>{{ $b->stok }}</td>
                            <td>
                                <a class="btn btn-outline-primary" href="/buku/edit/{{ $b->id }}" role="button"><i class="fas fa-fw fa-edit"></i></a>
                                |
                                <a class="btn btn-outline-danger" href="/buku/hapus/{{ $b->id }}" role="button"><i class="fas fa-fw fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection


