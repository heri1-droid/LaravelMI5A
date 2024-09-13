@extends('layouts.main')

@section('content')
<h1>sassssss</h1>
    @foreach ($prodi as $row)
        {{ $row['nama'] }}
    @endforeach
@endsection