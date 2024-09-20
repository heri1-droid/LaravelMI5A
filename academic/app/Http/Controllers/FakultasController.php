<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use Illuminate\Http\Request;

class FakultasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Panggil model Fakultas
        $result = Fakultas::all();
        // dd($result);

        // Kirim data $result ke views fakultas/index.blade.php
        return view('fakultas.index')->with('fakultas', $result);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('fakultas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $input = $request ->validate([
            "nama"      =>  "required|unique:fakultas",
            "dekan"     =>  "required",
            "singkatan" =>  "required"
        ]);

        //simpan
        Fakultas::create($input);
        
        //redirect
        return redirect()->route('fakultas.index')->with('success', $request->nama. 'berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Fakultas $fakultas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fakultas $fakultas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Fakultas $fakultas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fakultas $fakultas)
    {
        //
    }
}
