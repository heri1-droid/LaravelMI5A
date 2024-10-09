@extends('layouts.main')

@section('content')
<h4>Fakultas</h4>
<a href="{{route(name: 'fakultas.create')}}" class="btn btn-primary">Tambah</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Nama Fakultas</th>
            <th>Nama Dekan</th>
            <th>Singkatan</th>
            <td>#</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($fakultas as $row)
            <tr>
                <td>{{ $row['nama'] }}</td>
                <td>{{ $row['dekan'] }}</td>
                <td>{{ $row['singkatan'] }}</td>
                <td>
                    <a href="{{url('fakultas/' . $row['id'] . '/edit')}}" class="btn btn-xs btn-warning">Ubah</a>

                    <form action="{{route('fakultas.destroy', $row['id'])}}" method="post" style="display:inline">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-xs btn-danger">Hapus</button>
                    </form>
                </td>

            </tr>
        @endforeach
    </tbody>
</table>
@endsection