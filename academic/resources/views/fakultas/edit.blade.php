@extends('layouts.main')

@section('content')

<h4>Fakultas</h4>


<form action="{{route('fakultas.edit')}}" method="POST"> 
    @csrf
    Nama
    <input type="text" name="nama" id="" class="form-control">
    Dekan
    <input type="text" name="dekan" id="" class="form-control">
    Singkatan
    <input type="text" name="singkatan" id="" class="form-control">

    <button type="submit" class="btn btn-primary">Simpan</button>
    
</form>

@endsection