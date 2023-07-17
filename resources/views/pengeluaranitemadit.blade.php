@extends('layouts.app')
@section('title', 'Pengelluaran Item')

@section('content')
    <table class="table-bordered table">
        <tr>
            <th>ID</th>
            <th>NoBk_Adit</th>
            <th>Barang_Adit</th>
            <th>Jumlah_Adit</th>
        </tr>

        @foreach($pengeluaranitemadit as $pgri)
        
        <tr>
            <td>{{ $pgri->id }}</td>
            <td>{{ $pgri->nobk_adit }}</td>
            <td>{{ $pgri->barang_adit }}</td>
            <td>{{ $pgri->jumlah_adit }}</td>

        </tr>

        @endforeach
    </table>
    @endsection