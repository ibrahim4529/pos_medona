@extends('layouts.app')
@section('title', 'Kategori')
@section('content')
  <x-data-table title="Kategori" :header="$header_table" resource="categories">
    @include('category.form')
  </x-data-table>
@endsection
