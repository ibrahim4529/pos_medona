@extends('layouts.app')
@section('title', 'Users')
@section('content')
    <x-data-table title="Outlets"  :header="$header_table" resource="outlets">
        @include('outlet.form')                  
    </x-data-table>
@endsection
