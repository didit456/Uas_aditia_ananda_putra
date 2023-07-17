@extends('layouts.app')
@section('title', 'Kategori')

@section('content')
    <table class="table-bordered table">
        <tr>
            <th>ID</th>
            <th>Nama_Kategori_Adit</th>
        </tr>

        @foreach($kategoriadit as $ktg)
        
        <tr>
            <td>{{ $ktg->id }}</td>
            <td>{{ $ktg->nama_kategori_adit }}</td>
        </tr>

        @endforeach
    </table>
@endsection