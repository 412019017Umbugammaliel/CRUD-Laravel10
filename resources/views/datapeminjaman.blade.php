@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Data Peminjaman Perpustakaan</h1>
@stop

@section('content')
<div class="container">
    <p>Daftar Peminjaman Perpustakaan</p>
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Anggota</th>
                    <th scope="col">Buku</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tampilpeminjaman as $peminjaman)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$peminjaman->Nama}}</td>
                    <td>{{$peminjaman->Judul}}</td>
                    <td>
                       <a href="{{ route('detail', ['id' => $peminjaman->id]) }}" class="btn btn-warning">Details</a>
                        <form class="d-inline" action="{{ route('hapuspeminjaman', ['id' => $peminjaman->id]) }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <style>
        .table-responsive {
            overflow-x: auto;
        }
    </style>
@stop
