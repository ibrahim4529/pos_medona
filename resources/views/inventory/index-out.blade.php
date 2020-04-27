@extends('layouts.app')
@section('title', 'Produk Masuk')
@section('content')
  <x-data-table title="Produk Masuk" :items="$users"/>
@endsection
