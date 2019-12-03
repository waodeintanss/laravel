@extends('template/main')

@section('title', 'Form Tambah Data Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h2>Form Tambah Data Mahasiswa</h2>
   
        <form method="post" action="/students">
        @csrf
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="nama">
            @error('nama')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="nrp">NRP</label>
            <input type="text" class="form-control @error('nrp') is-invalid @enderror" id="nrp" placeholder="Masukkan Nrp" name="nrp">
            @error('nrp')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" placeholder="Masukkan Email" name="email">
        </div>
        <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <input type="text" class="form-control" id="jurusan" placeholder="Masukkan Jurusan" name="jurusan">
        </div>
        <button type="submit" class="btn btn-primary">Tambah Data!</button>
        </form>
           
        </div>
    </div>
</div>   
@endsection
