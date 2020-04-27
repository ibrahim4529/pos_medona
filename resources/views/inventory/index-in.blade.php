@extends('layouts.app')
@section('title', 'Inventory Masuk')
@section('content')
  <x-data-table title="Inventory Masuk" :header="$header_table" resource="in"/>
@endsection
@push('js')
    <script>
        function show_detail(id){
            alert("Datail"+id);
        }
    </script>
@endpush
