@extends('template')
{{-- @extends('layouts.app') --}}

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Form Mahasiswa</div>
                <div class="card-body">
                    <form method="POST" action="{{url('mahasiswa')}}">
                        @csrf
                        <div class="form-group row">
                            <label for="nama" class="col-md-2 col-form-label text-md-right">Nama</label>
                            <div class="col-md-6">
                                <input id="nama" type="text" name="nama"
                                class="@error('nama') is-invalid @enderror" autofocus>
                                @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="prodi" class="col-md-2 col-form-label text-md-right">Prodi</label>
                            <div class="col-md-6">
                                <input id="prodi" type="text" name="prodi"
                                class="@error('prodi') is-invalid @enderror" autofocus>
                                @error('prodi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="semester" class="col-md-2 col-form-label text-md-right">Semester</label>
                            <div class="col-md-6">
                                <input id="semester" type="text" name="semester"
                                class="@error('semester') is-invalid @enderror" autofocus>
                                @error('semester')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-2">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
