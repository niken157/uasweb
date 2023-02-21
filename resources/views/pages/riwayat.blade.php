
@extends('template')

@section('main')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Riwayat Peminjaman</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Riwayat Peminjaman</h6>
            </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nomer Peminjaman</th>
                            <th>Nama Peminjam</th>
                            <th>Judul Buku</th>
                            <th>Gambar</th>
                            <th>Tanggal Pinjam</th>
                            <th>Tanggal Kembali</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($peminjaman as $p)
                        <tr>
                            <td>{{ $p->nomer }}</td>
                            <td>{{ $p->nama_peminjam }}</td>
                            <td>{{ $p->judul }}</td>
                            <td><img height="200" width="130" src="/user/img/buku/{{ $p->gambar }}"></td>
                            <td>{{ $p->created_at }}</td>
                            <td>{{ $p->updated_at }}</td>
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


