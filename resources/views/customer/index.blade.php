@extends('layouts.app')
@section('title', 'Customers')
@section('content')
  <x-data-table title="Customers" :header="$header_table" resource="customers"/>
@endsection
