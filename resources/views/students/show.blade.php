@extends('layout.main')
@section('title','Student detail')
@section('container')
    <div class="container">
        <h3>detail mahasiswa</h3>
        <div class="col-md-6">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">{{ $student->nama }}</h5>
                  <h6 class="card-subtitle mb-2 text-muted">{{ $student->nim }}</h6>
                  <p class="card-text">{{ $student->jurusan }}</p>
                  <p class="card-text">{{ $student->email }}</p>
                  <a class="btn btn-warning" href="/student/{{ $student->id }}/edit">edit</a>
                  <form action="{{ $student->id }}" class="d-inline" method="post">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger" type="submit">hapus</button>
                  </form>
                  <a href="/student">kembali</a>
                </div>
              </div>
        </div>
    </div>
@endsection
