@extends('layouts.main')

@section('content')

<h4>Fakultas</h4>


<form action="{{route('fakultas.update', $fakultas['id'])}}" method="POST"> 
    @csrf
    @method('PUT')
    Nama
    <input type="text" name="nama" id="nama" class="form-control" value="{{$fakultas['nama']}}">
    Dekan
    <input type="text" name="dekan" id="dekan" class="form-control" value="{{$fakultas['dekan']}}">
    Singkatan
    <input type="text" name="singkatan" id="singkatan" class="form-control mb-2" value="{{$fakultas['singkatan']}}">
    <button type="submit" class="btn btn-primary">ubah</button>
    
</form>

@endsection