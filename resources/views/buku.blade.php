@extends('adminlte::page')


@section('title','Dashboard')

@section('content_header')
<h1>Data Buku Perpustakaan</h1>
@stop


@section('content') 
<p>Daftar Buku</p>
<div class="card">
    <div class="card-header">
        <p>DAFTAR BUKU Perpustakaan</p>
    </div>
    <div class="card-body">
        <form action="{{route('store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="">Judul Buku</label>
                <input class="form-control" type="text" name="Judul" id="">
            </div>
            <div class="form-group">
                <label for="">Penulis</label>
                <input class="form-control" type="text" name="Penulis" id="">
            </div>
            <div class="form-group">
                <label for="">Penerbit</label>
                <input class="form-control" type="text" name="Penerbit" id="">
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
