@extends('layouts.app')
@section('title', 'Suppliers')
@section('content')
  <x-data-table title="Suppliers" :header="$header_table" resource="suppliers">
    @include('supplier.form')
  </x-data-table>
@endsection
