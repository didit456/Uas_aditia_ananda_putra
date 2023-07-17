@extends('layouts.app')
@section('title', 'Barang')

@section('content')
    <table class="table-bordered table">
        <tr>
            <th>ID</th>
            <th>Barangid_Adit</th>
            <th>NamaBarang_Adit</th>
            <th>Satuan_Adit</th>
            <th>Harga_Adit</th>
            <th>Kategori_Adit</th>

        </tr>

        @foreach($barangadit as $brg)
        
        <tr>
            <td>{{ $brg->id }}</td>
            <td>{{ $brg->barangid_adit }}</td>
            <td>{{ $brg->namabarang_adit }}</td>
            <td>{{ $brg->satuan_adit }}</td>
            <td>{{ $brg->harga_adit }}</td>
            <td>{{ $brg->kategori_adit }}</td>
        </tr>

        @endforeach
    </table>
@endsection