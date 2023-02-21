<?php
$nomor=rand(1000000,9999999);
?>
@extends('template')
@section('main')
<div class="card">
    <div class="card-body">
      <h1>Form Tambah Data Peminjaman</h1>
    <form action="/peminjaman/store" method="post">
        {{ csrf_field() }}
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nomer Peminjaman</label>
            <input name="nomer" type="number" value="<?php echo $nomor; ?>" class="form-control" id="exampleFormControlInput1" placeholder="<?php echo $nomor?>" readonly>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Peminjam</label>
            <input name="nama_peminjam" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nama peminjam" required>
        </div>
        <div class="mb-3">
            <label for="id">Judul Buku :</label>
            <select name="id" class="form-control" id="id">
                @php
                    $buku = DB::table('buku')
                    ->where('stok', '>=', 1)
                    ->get();
                @endphp
            @foreach($buku as $b)
            <option value="{{ $b->id }}">{{ $b->judul }}</option>
            @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Jumlah Sewa :</label>
            <input name="jumlah_sewa" readonly type="number" value="<?php echo 1; ?>" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Keterangan :</label>
            <input name="keterangan" readonly type="text" value="pinjam" class="form-control" id="exampleFormControlInput1">
            </select>
        </div>
        <?php
        $kembali    = date('Y-m-d', strtotime('+7 days', strtotime(date('Y-m-d')))); // penjumlahan tanggal sebanyak 7 hari
        ?>
        <input type="hidden" name="tanggal_k" value="<?php echo $kembali; ?>">
        <input type="hidden" name="created_at" value="<?php echo date('Y-m-d h:i:s'); ?>">
        <input type="hidden" name="updated_at" value="<?php echo date('Y-m-d h:i:s'); ?>">
        <input type="submit" value="Simpan Data" class="btn btn-primary">
    </form>
    </div>
  </div>

@endsection


