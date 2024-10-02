<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $mahasiswa = DB::select('SELECT  prodis.nama, count(*) as jumlah 
                                FROM mahasiswas
                                join prodis on mahasiswas.prodi_id = prodis.id
                                GROUP by prodis.nama;');
        return view('dashboard')->with('mahasiswa', $mahasiswa);
    }
}
