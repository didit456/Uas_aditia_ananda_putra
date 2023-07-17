@extends('layouts.app')
@section('title', 'Petugas')

@section('content')
    <table class="table-bordered table">
        <tr>
            <th>Petugas ID</th>
            <th>Nama Petugas</th>
            <th>Alamat</th>
            <th>Handphone</th>
            <th>Password</th>
            <th>Level</th>
        </tr>

        @foreach($petugasadit as $ptgs)
        
        <tr>
            <td>{{ $ptgs->petugasid_adit }}</td>
            <td>{{ $ptgs->namapetugas_adit }}</td>
            <td>{{ $ptgs->alamat_adit }}</td>
            <td>{{ $ptgs->handphone_adit }}</td>
            <td>{{ $ptgs->password_adit }}</td>
            <td>{{ $ptgs->level_adit }}</td>
        </tr>

        @endforeach
    </table>
    @endsection