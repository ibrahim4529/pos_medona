@extends('layouts.app')
@section('title', 'Users')
@section('content')
  <x-data-table title="Users" :header="$header_table" resource="users"/>
@endsection
