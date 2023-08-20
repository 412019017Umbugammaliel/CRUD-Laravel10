@extends('adminlte::page')


@section('title','Dashboard')

@section('content_header')
<h1>Data Buku Perpustakaan</h1>
@stop


@section('content') 
<p>Daftar Buku</p>
<div class="card">
    <div class="card-header">
        <p>DAFTAR Anggota Perpustakaan</p>
    </div>
    <div class="card-body">
        <form action="{{route('anggota')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="">Nama</label>
                <input class="form-control" type="text" name="Nama" id="">
            </div>
            <div class="form-group">
                <label for="">Alamat</label>
                <input class="form-control" type="text" name="Alamat" id="">
            </div>
            <div class="form-group">
                <label for="">No. Telp</label>
                <input class="form-control" type="text" name="Telp" id="">
            </div>
            <div class="card-footer">
                <button class="btn btn-success" type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>
@stop


    @section('css')
    <link rel="
    stylesheet" href="/css/admin_custom.css">
    @stop
