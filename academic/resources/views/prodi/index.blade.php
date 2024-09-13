@extends('layouts.main')

@section('content')
<h1>sassssssssss</h1>
    @foreach ($prodi as $row)
        {{ $row['nama'] }}
    @endforeach
@endsection