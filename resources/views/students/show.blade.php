@extends('template/main')

@section('title', 'Detail Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h2>Detail Mahasiswa</h2>
   
            <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{$student->nama}}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{$student->email}}</h6>
                <p class="card-text">{{$student->nrp}}</p>
                <p class="card-text">{{$student->jurusan}}</p>
                <a href="#" class="btn btn-success">Edit</a>
                <form action="{{ $student->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit" class ="btn btn-danger">Delete</button>
                </form>
                <!-- <a href="#" class="btn btn-danger" type="submit">Delete</a> -->
                <a href="{{url('students/')}}" class="card-link">Kembali</a>
            </div>
            </div>

        </div>
    </div>
</div>   
@endsection
