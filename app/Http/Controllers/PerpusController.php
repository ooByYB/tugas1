<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PerpusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $anggota = DB::table('anggota')->get();
        $petugas = DB::table('petugas')->get();
        $buku = DB::table('buku')->get();
        return view('king.tabel', compact('buku', 'petugas', 'anggota'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('king.table');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
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
    public function destroy(string $id)
    {
        //
    }
}
