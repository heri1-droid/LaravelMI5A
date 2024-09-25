<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use App\Models\Prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Panggil model Prodi
        $result = Prodi::all();

        // Kirim data $result ke views prodi/index.blade.php
        return view('prodi.index')->with('prodi', $result);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $fakultas = Fakultas::all();
        return view('prodi.create')->with('fakultas', $fakultas);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request ->validate([
            "nama"      =>  "required|unique:fakultas",
            "kaprodi"     =>  "required",
            "singkatan" =>  "required",
            "fakultas_id" =>  "required"

        ]);

        //simpan
        Prodi::create($input);
        
        //redirect
        return redirect()->route('prodi.index')->with('success', $request->nama. 'berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Prodi $prodi)
    {
        //oke
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prodi $prodi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prodi $prodi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prodi $prodi)
    {
        //
    }
}
