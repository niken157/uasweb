<?php
$nomor=rand(1000,9999);
?>
@extends('template')

@section('main')
<div class="card">
    <div class="card-body">
      <h1>Form Tambah Data Buku</h1>
    <form action="/buku/store" method="post">
        {{ csrf_field() }}
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Kode Buku</label>
            <input name="kodebuku" type="text" class="form-control @error('kodebuku') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Masukkan kode buku" autofocus value="{{ old('kodebuku') }}">
            @error('kodebuku')
                <span class="invalid-feedback" role="alert">
                <strong>{{$message}}</strong>
                </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Judul Buku</label>
            <input name="judul" type="text" class="form-control @error('judul') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Masukkan judul buku" value="{{ old('judul') }}">
            @error('judul')
                <span class="invalid-feedback" role="alert">
                <strong>{{$message}}</strong>
                </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Gambar</label>
            <input name="gambar" class="form-control @error('gambar') is-invalid @enderror" type="file" id="formFile" value="{{ old('gambar') }}">
            @error('gambar')
                <span class="invalid-feedback" role="alert">
                <strong>{{$message}}</strong>
                </span>
            @enderror
          </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Pengarang</label>
            <input name="pengarang" type="text" class="form-control @error('pengarang') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Masukkan pengarang buku" value="{{ old('pengarang') }}">
            @error('pengarang')
            <span class="invalid-feedback" role="alert">
            <strong>{{$message}}</strong>
            </span>
        @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Penerbit</label>
            <input name="penerbit" type="text" class="form-control @error('penerbit') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Masukkan penerbit buku" value="{{ old('penerbit') }}">
            @error('penerbit')
            <span class="invalid-feedback" role="alert">
            <strong>{{$message}}</strong>
            </span>
        @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Stok</label>
            <input name="stok" type="text" class="form-control @error('stok') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Masukkan stok" value="{{ old('stok') }}">
            @error('stok')
            <span class="invalid-feedback" role="alert">
            <strong>{{$message}}</strong>
            </span>
        @enderror
        </div>
        <input type="hidden" name="created_at" value="<?php echo date('Y-m-d h:i:s'); ?>">
        <input type="hidden" name="updated_at" value="<?php echo date('Y-m-d h:i:s'); ?>">
        <input type="submit" value="Simpan Data" class="btn btn-primary">
    </form>
    </div>
  </div>

@endsection


