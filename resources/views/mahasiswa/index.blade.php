@extends('layout.main')
@section('title','daftar mahasiswa')
@section('container')
    <div class="container">
        <h3>daftar mahasiswa</h3>

        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>nama</th>
                    <th>NIM</th>
                    <th>jurusan</th>
                    <th>email</th>
                    <th>aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswa as $mhs)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $mhs->nama }}</td>
                    <td>{{ $mhs->nim }}</td>
                    <td>{{ $mhs->jurusan }}</td>
                    <td>{{ $mhs->email }}</td>
                    <td>
                        <a href="" class="badge bg-warning">edit</a>
                        <a href="" class="badge bg-danger">hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
