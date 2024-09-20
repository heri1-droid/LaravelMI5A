@extends('layouts.main')

@section('content')
    <h4>Fakultas</h4>
    <a href="{{route('fakultas.create')}}" class="btn btn-primary">Tambah</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nama Fakultas</th>
                <th>Nama Dekan</th>
                <th>Singkatan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($fakultas as $row)
                <tr>
                    <td>{{ $row['nama'] }}</td>
                    <td>{{ $row['dekan'] }}</td>
                    <td>{{ $row['singkatan'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection