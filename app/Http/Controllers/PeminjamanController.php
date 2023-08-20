<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjaman;
use Illuminate\Support\Facades\DB;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $anggota = DB::table('anggota')->get();
        $buku = DB::table('buku')->get();
        return view('peminjaman', compact('buku', 'anggota'));
    }

    public function tampilkanpeminjaman()
    {
        $tampilpeminjaman = DB::table('peminjaman as p')
            ->select('p.ID_Anggota', 'p.ID_Buku', 'b.Judul', 'a.Nama', 'p.id')
            ->join('buku as b', 'b.id', '=', 'p.ID_Buku')
            ->join('anggota as a', 'a.id', '=', 'p.ID_Anggota')
            ->get();
        return view('datapeminjaman', compact('tampilpeminjaman'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //create post
        Peminjaman::create([
            'ID_Anggota' => $request->Anggota,
            'ID_Buku' => $request->Buku,
        ]);

        //redirect to index
        return redirect('/tampilpeminjaman');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $peminjaman = DB::table('peminjaman as p')
            ->select('p.ID_Anggota', 'p.ID_Buku', 'b.Judul', 'a.Nama', 'p.id')
            ->join('buku as b', 'b.id', '=', 'p.ID_Buku')
            ->join('anggota as a', 'a.id', '=', 'p.ID_Anggota')
            ->where('p.id', $id)
            ->first();

        return view('detailpeminjaman', compact('peminjaman'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $hapus = Peminjaman::find($id);
        $hapus->delete();
        return redirect('/peminjaman');
    }
}