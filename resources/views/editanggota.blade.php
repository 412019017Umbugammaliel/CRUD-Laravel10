@extends('adminlte::page')


@section('title','Dashboard')

@section('content_header')
<h1>Data Anggota Perpustakaan</h1>
@stop


@section('content') 
<p>Edit Anggota</p>
<div class="card">
    <div class="card-header">
        <p>DAFTAR Anggota Perpustakaan</p>
    </div>
    <div class="card-body">
        <form action="{{ route('update', ['id' => $anggota->id]) }}" method="post">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="">Nama</label>
                <input class="form-control" value="{{$anggota->Nama}}"  type="text" name="Nama" id="">
            </div>
            <div class="form-group">
                <label for="">Alamat</label>
                <input class="form-control" value="{{$anggota->Alamat}}" type="text" name="Alamat" id="">
            </div>
            <div class="form-group">
                <label for="">NoTelp</label>
                <input class="form-control" value="{{$anggota->NoTelp}}" type="text" name="NoTelp" id="">
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
