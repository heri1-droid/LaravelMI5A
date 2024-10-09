@extends('layouts.main')

@section('content')
    <h4>{{$mahasiswa['nama']}}</h4>
        <!-- <h4>{{$mahasiswa['nama']}}</h4>
    <h4>{{$mahasiswa['nama']}}</h4>
    <h4>{{$mahasiswa['nama']}}</h4>
    <h4>{{$mahasiswa['nama']}}</h4> -->

    <table class="table table-striped">
        <tr>
            <td>Program Studi</td>
            <td>{{$mahasiswa['prodi']['nama']}}</td>
        </tr>
        <tr>
            <td>NPM</td>
            <td>{{$mahasiswa['npm']}}</td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>{{$mahasiswa['nama']}}</td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td>{{$mahasiswa['tempat_lahir']}}</td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>{{$mahasiswa['tanggal_lahir']}}</td>
        </tr>
        <tr>
            <td>email</td>
            <td>{{$mahasiswa['email']}}</td>
        </tr>
        <tr>
            <td>No Hp</td>
            <td>{{$mahasiswa['hp']}}</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>{{$mahasiswa['alamat']}}</td>
        </tr>
    </table>

@endsection