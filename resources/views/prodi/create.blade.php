@extends('layouts.main')

@section('content')

<h4>Prodi</h4>


<form action="{{route('prodi.store')}}" method="POST"> 
    @csrf
    Nama
    <input type="text" name="nama" id="" class="form-control">
    Kaprodi
    <input type="text" name="kaprodi" id="" class="form-control">
    Singkatan
    <input type="text" name="singkatan" id="" class="form-control">
    Fakultas
    <select name="fakultas_id" class="form-control">
        @foreach ($fakultas as $item)
            <option value="{{$item['id']}}">{{$item['nama']}}</option>
        @endforeach
    </select>

    <br><br>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>

@endsection