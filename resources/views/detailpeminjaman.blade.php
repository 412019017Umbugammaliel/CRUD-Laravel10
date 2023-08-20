@extends('adminlte::page')


@section('title','Dashboard')

@section('content_header')
<h1>Data Peminjaman Perpustakaan</h1>
@stop


@section('content') 
<p>Detail Peminjaman</p>
<div class="card">
    <div class="card-header">
        <p>DAFTAR Peminjaman Perpustakaan</p>
    </div>
    <div class="card-body">
        <form action="{{ route('update', ['id' => $peminjaman->id]) }}" method="post">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="">ID Anggota</label>
                <input class="form-control" value="{{$peminjaman->Nama}}" type="text" name="ID_Anggota" id="">
            </div>
            <div class="form-group">
                <label for="">ID Buku</label>
                <input class="form-control" value="{{$peminjaman->Judul}}" type="text" name="ID_Buku" id="">
            </div>
        </form>
    </div>
</div>
@stop


    @section('css')
    <link rel="
    stylesheet" href="/css/admin_custom.css">
    @stop
