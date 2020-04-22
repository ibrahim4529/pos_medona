@extends('layouts.app')
@section('title', 'Tambah Outlet')
@section('content')
    <x-page-content title="Outlet" resource="outlets">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title text-center">Tambah Data</div>
                    </div>
                    {{Form::open(['route' => 'outlets.store'])}}
                    <div class="card-body">
                        @include('outlet.form')
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </x-page-content>
@endsection
