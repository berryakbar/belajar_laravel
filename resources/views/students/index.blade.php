@extends('layout.main')
@section('title','Students')
@section('container')
    <div class="container">
        <h3>daftar mahasiswa</h3>
        <div class="col-md-6">
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
            <a href="student/create" class="btn btn-primary my-3">tambah data</a>
        <ul class="list-group">
            @foreach ($students as $student)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $student->nama }}
                <a href="/student/{{ $student->id }}" class="badge bg-primary">detail</a>
            </li>
            @endforeach
          </ul>
        </div>
    </div>
@endsection
