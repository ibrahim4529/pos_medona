<div class="col-sm-12">
    <div class="form-group" id="name">
        {!! Form::label('name', 'Nama Outlet', ['class'=>'placeholder']) !!}
        {!! Form::input('name', 'name', old('email'), ['class' => 'form-control']) !!}
    </div>
</div>
<div class="col-sm-12">
    <div class="form-group" id="address">
        {!! Form::label('address', 'Alamat Outlet', ['class'=>'placeholder']) !!}
        {!! Form::input('address', 'address', old('address'), ['class' => 'form-control']) !!}
    </div>
</div>
<div class="col-sm-12">
    <div class="form-group" id="phone">
        {!! Form::label('phone', 'Nomor Telephone', ['class'=>'placeholder']) !!}
        {!! Form::input('phone', 'phone', old('phone'), ['class' => 'form-control']) !!}
    </div>
</div>
