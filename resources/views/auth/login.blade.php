@extends('layouts.app')

@section('content')
<div class="container container-login animated fadeIn">
    <h3 class="text-center">LOGIN</h3>
    {!! Form::open(['url' => 'login']) !!}
    <div class="login-form">
        <div class="form-group @error('email') has-error has-feedback @enderror">
    {!! Form::label('email', 'Email Address', ['class'=>'placeholder']) !!}
    {!! Form::input('email', 'email', old('email'), ['class' => 'form-control']) !!}
    @error($name)
    <label class="error" for="{{$name}}">
        {{$message}}
    </label>
    @enderror
</div>
        <div class="login-form">
        <div class="form-group @error('password') has-error has-feedback @enderror">
    {!! Form::label('password', 'Password', ['class'=>'placeholder']) !!}
    {!! Form::input('password', 'password', old('password'), ['class' => 'form-control']) !!}
    @error($name)
    <label class="error" for="{{$name}}">
        {{$message}}
    </label>
    @enderror
</div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary col-md-5 float-right mt-3 mt-sm-0 fw-bold">Sign In</button>
        </div>
    </div>
    {!! Form::close() !!}
</div>
@endsection