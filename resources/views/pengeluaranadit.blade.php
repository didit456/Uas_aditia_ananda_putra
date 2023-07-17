@extends('layouts.app')
@section('title', 'Pengeluaran')

@section('content')
    <table class="table-bordered table">
        <tr>
            <th>ID</th>
            <th>NoBk_Adit</th>
            <th>Tanggal_Adit</th>
            <th>Noreff_Adit</th>
            <th>Bagianid_Adit</th>
            <th>Petugasid_Adit</th>
            <th>Keterangan_Adit</th>
        </tr>

        @foreach($pengeluaranadit as $pgr)
        
        <tr>
            <td>{{ $pgr->id }}</td>
            <td>{{ $pgr->nobk_adit }}</td>
            <td>{{ $pgr->tanggal_adit }}</td>
            <td>{{ $pgr->noreff_adit }}</td>
            <td>{{ $pgr->bagianid_adit }}</td>
            <td>{{ $pgr->petugasid_adit }}</td>
            <td>{{ $pgr->keterangan_adit }}</td>

        </tr>

        @endforeach
    </table>
    @endsection