@extends('layouts.app')
@section('title', 'Bagian')

@section('content')
    <table class="table-bordered table">
        <tr>
            <th>ID</th>
            <th>Bagianid_Adit</th>
            <th>NamaBagian_Adit</th>
            <th>KepalaBagian_Adit</th>
            <th>Telp_Adit</th>
        </tr>

        @foreach($bagianadit as $bgn)
        
        <tr>
            <td>{{ $bgn->id }}</td>
            <td>{{ $bgn->bagianid_adit }}</td>
            <td>{{ $bgn->namabagian_adit }}</td>
            <td>{{ $bgn->kepalabagian_adit }}</td>
            <td>{{ $bgn->telp_adit }}</td>
        </tr>

        @endforeach
    </table>
@endsection