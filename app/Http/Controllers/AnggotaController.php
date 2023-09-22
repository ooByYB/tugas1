<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('king.member.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'kode' => 'required',
            'nama' => 'required',
            'jk' => 'required',
            'jurusan' => 'required',
            'tlp' => 'required',
            'alamat' => 'required',
        ]);

        $query = DB::table('anggota')->insert([
            'id' => $request['id'],
            'kode' => $request['kode'],
            'nama' => $request['nama'],
            'jk' => $request['jk'],
            'jurusan' => $request['jurusan'],
            'tlp' => $request['tlp'],
            'alamat' => $request['alamat'],
        ]);

        return redirect('/tabel');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $anggota = DB::table('anggota')->where('id', $id)->get();
        return view('king.member.show', compact('anggota'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $anggota = DB::table('anggota')->where('id', $id)->get();
        return view('king.member.edit', compact('anggota'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'id' => 'required|numeric',
            'kode' => 'required|numeric',
            'nama' => 'required|unique:anggota,nama',
            'jk' => 'required',
            'jurusan' => 'required',
            'tlp' => 'required|numeric|min:11|max:12',
            'alamat' => 'required|min:10|max:200',
        ]);

        $query = DB::table('anggota')->where('id', $id)->update([
            'id' => $request['id'],
            'kode' => $request['kode'],
            'nama' => $request['nama'],
            'jk' => $request['jk'],
            'jurusan' => $request['jurusan'],
            'tlp' => $request['tlp'],
            'alamat' => $request['alamat'],
        ]);

        return redirect()->route('tabel.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $query = DB::table('anggota')->where('id', $id)->delete();
            return redirect()->route('tabel.index');
    }
}