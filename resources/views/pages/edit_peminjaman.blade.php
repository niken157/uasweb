
@extends('template')

@section('main')
<div class="card">
    <div class="card-body">
      <h1>Form Edit Peminjaman Buku</h1>
      @foreach ($peminjaman as $p)
    <form action="/peminjaman/update" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id_peminjam" value="{{ $p->id_peminjam }}">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nomer Peminjaman</label>
            <input name="nomer" required="reqired" type="number" class="form-control" id="exampleFormControlInput1" value="{{ $p->nomer }}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Peminjam</label>
            <input name="nama_peminjam" required="reqired" type="text" class="form-control" id="exampleFormControlInput1" value="{{ $p->nama_peminjam }}">
        </div>
        <div class="mb-3">
            <label for="id">Judul Buku :</label>
            <select name="id" required="reqired" class="form-control" id="id">
                @php
                    $buku = DB::table('buku')->get();
                @endphp
            @foreach($buku as $b)
            <option value="{{ $b->id }}">{{ $b->judul }}</option>
            @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Jumlah Sewa</label>
            <input name="jumlah_sewa" required="reqired" readonly type="number" class="form-control" id="exampleFormControlInput1" value="{{ $p->jumlah_sewa }}">
        </div>
        <div class="mb-3">
            <label for="keterangan">Keterangan :</label>
            <select name="keterangan" required="reqired" class="form-control" id="keterangan">
            <option value="pinjam">Pinjam</option>
            <option value="kembali">Kembali</option>
            </select>
        </div>
        <?php
        $kembali    = date('Y-m-d', strtotime('+7 days', strtotime(date('Y-m-d')))); // penjumlahan tanggal sebanyak 7 hari
        ?>
        <input type="hidden" name="tanggal_k" value="<?php echo $kembali; ?>">
        <input type="hidden" name="created_at" value="{{ $p->created_at }}">
        <input type="hidden" name="updated_at" value="<?php echo date('Y-m-d h:i:s'); ?>">
        <input type="submit" value="Simpan Data">
    </form>
    @endforeach
    </div>
  </div>

@endsection


