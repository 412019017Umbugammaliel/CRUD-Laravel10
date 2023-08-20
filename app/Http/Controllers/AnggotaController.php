<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('anggota');
    }

    public function tampilkananggota()
    {
        $tampilanggota = anggota::all();
        return view('dataanggota', compact('tampilanggota'));
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
        Anggota::create([
            'Nama' => $request->Nama,
            'Alamat' => $request->Alamat,
            'NoTelp' => $request->Telp,
        ]);

        //redirect to index
        return redirect('/anggota');
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
    public function edit(string $id)
    {
        $anggota = Anggota::find($id);
        return view('editanggota', compact('anggota'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updateanggota = Anggota::find($id);
        $edit = [
            'Nama' => $request->input('Nama'),
            'Alamat' => $request->input('Alamat'),
            'NoTelp' => $request->input('NoTelp'),
        ];

        $updateanggota->update($edit);
        return redirect('/tampilanggota');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $hapus = Anggota::find($id);

        if ($hapus) {
            $hapus->delete();
        }

        return redirect('/tampilanggota');
    }
}