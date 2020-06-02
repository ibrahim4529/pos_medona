<div class="col-sm-6">
    <div class="form-group" id="name">
        {!! Form::label('name', 'Nama Lengkap', ['class'=>'placeholder']) !!}
        {!! Form::input('name', 'name', old('email'), ['class' => 'form-control']) !!}
    </div>
</div>
<div class="col-sm-6">
    <div class="form-group" id="username">
        {!! Form::label('username', 'Username', ['class'=>'placeholder']) !!}
        {!! Form::input('username', 'username', old('username'), ['class' => 'form-control']) !!}
    </div>
</div>

<div class="col-sm-12">
    <div class="form-group" id="email">
        {!! Form::label('email', 'Alamat Email', ['class'=>'placeholder']) !!}
        {!! Form::input('email', 'email', old('email'), ['class' => 'form-control']) !!}
    </div>
</div>
<div class="col-sm-6">
    <div class="form-group" id="password">
        {!! Form::label('password', 'password', ['class'=>'placeholder']) !!}
        {!! Form::password('password', ['class' => 'form-control']) !!}
    </div>
</div>
<div class="col-sm-6">
    <div class="form-group" id="password_confirmation">
        {!! Form::label('password_confirmation', 'Password Confirmation', ['class'=>'placeholder']) !!}
        {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
    </div>
</div>
<div class="col-sm-12">
    <div class="form-group" id="photo">
        <img id="photo" src="" alt="" class="img img-circle">
        {!! Form::label('photo', 'Photo', ['class'=>'placeholder']) !!}
        {!! Form::file('photo', ['class' => 'form-control']) !!}
    </div>
</div>
