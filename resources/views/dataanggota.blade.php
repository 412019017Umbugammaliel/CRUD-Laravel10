@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Data Anggota Perpustakaan</h1>
@stop

@section('content')
<div class="container">
    <p>Daftar Anggota Perpustakaan</p>
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">NoTelp</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tampilanggota as $anggota)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$anggota->Nama}}</td>
                    <td>{{$anggota->Alamat}}</td>
                    <td>{{$anggota->NoTelp}}</td>
                    <td>
                        <a href="{{ route('editanggota', ['id' => $anggota->id]) }}" class="btn btn-warning">Edit</a>
                        <form class="d-inline" action="{{ route('hapusanggota',$anggota->id)}}" method="post">
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
