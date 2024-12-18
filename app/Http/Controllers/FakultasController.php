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
        $input = $request->validate([
            "nama" => "required|unique:fakultas",
            "dekan" => "required",
            "singkatan" => "required"
        ]);

        //simpan
        Fakultas::create($input);

        //redirect
        return redirect()->route('fakultas.index')->with('success', $request->nama . 'berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Fakultas $fakultas)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // dd($id);
        $fakultas = Fakultas::find($id);
        // dd($fakultas);

        return view(view: 'fakultas.edit')->with('fakultas', $fakultas);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Temukan model berdasarkan ID
        $fakultas = Fakultas::find($id);

        // Validasi input
        $input = $request->validate([
            "nama" => "required:fakultas",
            "dekan" => "required",
            "singkatan" => "required"
        ]);

        // Update atribut model
        $fakultas->update($input);

        // Redirect dengan pesan sukses
        return redirect()->route('fakultas.index')->with('success', $request->nama . ' berhasil diubah');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $fakultas = Fakultas::find($id);
        $fakultas->delete();
        return redirect()->route('fakultas.index')->with('success', 'Data Fakultas berhasil dihapus');
    }

     public function getFakultas(){
        $response['data'] = Fakultas::all();
        $response['message'] = 'List data fakultas';
        $response['success'] = true;

        return response()->json($response, 200);
    }

    public function storeFakultas(Request $request){
        // validasi input
        $input = $request->validate([
            "nama"      => "required|unique:fakultas",
            "dekan"     => "required",
            "singkatan" => "required"
        ]);

        // simpan
        $hasil = Fakultas::create($input);
        if($hasil){ // jika data berhasil disimpan
            $response['success'] = true;
            $response['message'] = $request->nama." berhasil disimpan";
            return response()->json($response, 201); // 201 Created
        } else {
            $response['success'] = false;
            $response['message'] = $request->nama." gagal disimpan";
            return response()->json($response, 400); // 400 Bad Request
        }
    }

    public function destroyFakultas($id)
    {
        $fakultas = Fakultas::find($id);
        $fakultas->delete();
        $hasil = Fakultas::delete();
         if($hasil){ // jika data berhasil disimpan
            $response['success'] = true;
            $response['message'] = "Fakultas Berhasil Dihapus";
            return response()->json($response, 200); // 201 Created
        } else {
            $response['success'] = false;
            $response['message'] = "Gagal Dihapus";
            return response()->json($response, 400); // 
        }
    }

    public function updateFakultas(Request $request, $id)
    {
        $fakultas = fakultas::find($id);
        //dd($fakultas);

        $input = $request->validate([
            "nama" => "required|unique:fakultas",
            "dekan" => "required",
            "singkatan" => "required"
        ]);


        $hasil = $fakultas->update($input);

        if($hasil){ // jika data berhasil disimpan
            $response['success'] = true;
            $response['message'] = $request->nama." berhasil diubah";
            return response()->json($response, 201); // 201 Created
        } else {
            $response['success'] = false;
            $response['message'] = $request->nama." gagal diubah";
            return response()->json($response, 400); // 400 Bad Request
        }

    }

}
