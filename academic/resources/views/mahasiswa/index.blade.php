@extends('layouts.main')

@section('content')
<h4>Mahasiswa</h4>

<a href="{{route(name: 'mahasiswa.create')}}" class="btn btn-primary">Tambah</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Npm</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Tempat Lahir</th>
            <th>Prodi</th>
        </tr>
    </thead>
    <tbody>
        <aside></aside>
        @foreach ($mahasiswa as $row)
            <tr>
                <td>{{ $row['npm'] }}</td>
                <td>{{ $row['nama'] }}</td>
                <td>{{ $row['tanggal_lahir'] }}</td>
                <td>{{ $row['tanggal_lahir'] }}</td>
                <td>{{ $row['prodi']['nama'] }}</td>

                <td>
                    <a href="{{route('mahasiswa.show', $row['id'])}}" class="btn btn-primary btn-xs">Show</a>

                    <form action="{{route('mahasiswa.destroy', $row['id'])}}" method="post" style="display:inline">
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