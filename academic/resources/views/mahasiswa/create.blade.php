@extends('layouts.main')

@section('content')

<h4>Mahasiswa</h4>


<form action="{{route('mahasiswa.store')}}" method="POST"> 
    @csrf
    NPM
    <input type="text" name="npm" id="" class="form-control">
    NAMA
    <input type="text" name="nama" id="" class="form-control">
    Tanggal Lahir
    <input type="date" name="tanggal_lahir" id="" class="form-control">
    Tempat Lahir
    <input type="text" name="tempat_lahir" id="" class="form-control">
    Email
    <input type="email" name="email" id="" class="form-control">
    Hp
    <input type="number" name="hp" id="" class="form-control">
    alamat
    <input type="text" name="alamat" id="" class="form-control">
    Prodi
    <select name="prodi_id" id="">
        @foreach ($prodi as $item)
            <option value="{{$item['id']}}">{{$item['nama']}}</option>
        @endforeach
    </select>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>

@endsection