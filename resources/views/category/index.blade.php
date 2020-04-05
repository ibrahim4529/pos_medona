@extends('layouts.app')
@section('title', 'Users')
@section('content')
  <x-data-table title="Users" :items="$users"/>
@endsection
