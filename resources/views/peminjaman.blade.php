@extends('adminlte::page')


@section('title','Dashboard')

@section('content_header')
<h1>Data Buku Perpustakaan</h1>
@stop


@section('content') 
<p>Daftar Peminjaman</p>
<div class="card">
    <div class="card-header">
        <p>DAFTAR Peminjam Perpustakaan</p>
    </div>
    <div class="card-body">
        <form action="{{route('peminjaman')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="">Buku</label>
                <select class="form-control" type="text" name="Buku" id="">
                    <option value="">Pilih</option>
                    @foreach ($buku as $buku)
                        <option value="{{ $buku->id }}">
                            {{ $buku->Judul}}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">Anggota</label>
                <select class="form-control" type="text" name="Anggota" id="">
                    <option value="">Pilih</option>
                    @foreach ($anggota as $anggota)
                        <option value="{{ $anggota->id }}">
                            {{ $anggota->Nama}}
                        </option>
                    @endforeach
                </select>
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
