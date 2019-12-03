@extends('template/main')

@section('title', 'Daftar Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h2>Daftar Mahasiswa</h2>

            <a href="/students/create" class="btn btn-primary my-3">Tambah Data Mahasiswa</a>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

    <table class="table">
    <thead class="thead-dark">
        <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <!-- <th scope="col">NRP</th>
        <th scope="col">Email</th>
        <th scope="col">Jurusan</th> -->
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>

        @foreach($students as $student)
        <tr>
        <th scope="row">{{$loop->iteration}}</th>
        <td>{{$student->nama}}</td>
       
        <td>
            <a href="{{url('students/' . $student->id)}}" class="badge badge-info">show detail</a>
        </td>
        </tr>
        @endforeach

    </tbody>
    </table>

        </div>
    </div>
</div>   
@endsection
