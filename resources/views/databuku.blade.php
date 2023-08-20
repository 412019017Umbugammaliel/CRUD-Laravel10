@extends('adminlte::page')

@section('title', 'Data Buku Perpustakaan')

@section('content_header')
    <h1>Data Buku Perpustakaan</h1>
@stop

@section('content')
<div class="container">
    <p>Daftar Buku Tersedia</p>
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Penerbit</th>
                    <th scope="col">Penulis</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tampilbuku as $buku)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$buku->Judul}}</td>
                    <td>{{$buku->Penerbit}}</td>
                    <td>{{$buku->Penulis}}</td>
                    <td>
                        <a href="{{route('editbuku',$buku->id)}}" class="btn btn-warning">Edit</a>
                        <form class="d-inline" action="{{ route('hapusbuku',$buku->id)}}" method="post">
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

        .btn {
            margin-right: 5px;
        }
    </style>
@stop
