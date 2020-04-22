<div class="col-sm-12">
    <div class="form-group @error('email') has-error has-feedback @enderror">
        {!! Form::label('name', 'Nama Outlet', ['class'=>'placeholder']) !!}
        {!! Form::input('name', 'name', old('email'), ['class' => 'form-control']) !!}
        @error('name')
        <label class="error" for="name">
            {{$message}}
        </label>
        @enderror
    </div>
</div>
<div class="col-sm-12">
    <div class="form-group @error('email') has-error has-feedback @enderror">
        {!! Form::label('address', 'Alamat Outlet', ['class'=>'placeholder']) !!}
        {!! Form::input('address', 'address', old('address'), ['class' => 'form-control']) !!}
        @error('address')
        <label class="error" for="address">
            {{$message}}
        </label>
        @enderror
    </div>
</div>
<div class="col-sm-12">
    <div class="form-group @error('email') has-error has-feedback @enderror">
        {!! Form::label('phone', 'Nomor Telephone', ['class'=>'placeholder']) !!}
        {!! Form::input('phone', 'phone', old('phone'), ['class' => 'form-control']) !!}
        @error('phone')
        <label class="error" for="phone">
            {{$message}}
        </label>
        @enderror
    </div>
</div>
