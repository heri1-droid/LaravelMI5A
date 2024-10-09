@extends('layouts.main')

@section('content')

<h4>Prodi</h4>


<form action="{{route('prodi.update', $prodi['id'])}}" method="POST">
    @csrf
    @method('PUT')
    Nama
    @error('nama')
    {{$message}}
    @enderror
    <input type="text" name="nama" id="nama" class="form-control" value="{{$prodi['nama']}}">
    Kaprodi
    @error('kaprodi')
        {{$message}}
    @enderror
    <input type="text" name="kaprodi" id="dekan" class="form-control" value="{{$prodi['kaprodi']}}">
    Singkatan
    @error('singkatan')
        {{$message}}
    @enderror
    <input type="text" name="singkatan" id="singkatan" class="form-control mb-2" value="{{$prodi['singkatan']}}">

    Fakultas
    @error('fakultas_id')
        {{$message}}
    @enderror
    <br>
    <select name="fakultas_id" id="form-control">
        @foreach ($fakultas as $item)
            <option value="{{$item['id']}}"  {{ $item['id'] == $prodi['fakultas_id'] ? "selected" : null}}> {{$item['nama']}}</option>
        @endforeach
    </select><br>
    <button type="submit" class="btn btn-primary mt-2">ubah</button>

</form>

@endsection