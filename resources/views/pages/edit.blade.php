
@extends('template')

@section('main')
<div class="card">
    <div class="card-body">
      <h1>Form Edit Data Buku</h1>
      @foreach ($buku as $b)
      <?php
        $date= date('d F Y, h:i:s A');
        ?>
    <form action="/buku/update" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $b->id }}">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Kode Buku</label>
            <input name="kodebuku" required="reqired" type="text" class="form-control" id="exampleFormControlInput1" value="{{ $b->kodebuku }}" readonly>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Judul Buku</label>
            <input name="judul" required="reqired" type="text" class="form-control" id="exampleFormControlInput1" value="{{ $b->judul }}">
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Gambar</label><br>
            <img src="/user/img/buku/{{ $b->gambar }}" style="width: 120px;float: left;margin-bottom: 5px;">
            <input name="gambar" required="reqired" class="form-control" type="file" id="formFile" value="{{ $b->judul }}">
          </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Pengarang Buku</label>
            <input name="pengarang" required="reqired" type="text" class="form-control" id="exampleFormControlInput1" value="{{ $b->pengarang }}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Penerbit</label>
            <input name="penerbit" required="reqired" type="text" class="form-control" id="exampleFormControlInput1" value="{{ $b->penerbit }}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Stok</label>
            <input name="stok" required="reqired" type="text" class="form-control" id="exampleFormControlInput1" value="{{ $b->stok }}">
        </div>
        <input type="hidden" name="created_at" value="{{ $b->created_at }}">
        <input type="hidden" name="updated_at" value="<?php echo date('Y-m-d h:i:s'); ?>">
        <input type="submit" value="Simpan Data">
    </form>
    @endforeach
    </div>
  </div>

@endsection


