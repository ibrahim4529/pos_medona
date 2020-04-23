@extends('layouts.app')
@section('title', 'Pegawai')
@section('content')
    <x-data-table title="Pegawai" :header="$header_table"  resource="pegawai">
        @include('user.form');
    </x-data-table>
@endsection
