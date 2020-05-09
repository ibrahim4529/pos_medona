<div class="col-sm-12">
    <div class="form-group" id="name">
        {!! Form::label('name', 'Nama Customer', ['class'=>'placeholder']) !!}
        {!! Form::input('name', 'name', old('email'), ['class' => 'form-control']) !!}
    </div>
</div>
<div class="col-sm-12">
    <div class="form-group" id="email">
        {!! Form::label('email', 'Alamat Email', ['class'=>'placeholder']) !!}
        {!! Form::input('email', 'email', old('email'), ['class' => 'form-control']) !!}
    </div>
</div>
<div class="col-sm-12">
    <div class="form-group" id="address">
        {!! Form::label('address', 'Alamat Customer', ['class'=>'placeholder']) !!}
        {!! Form::input('address', 'address', old('address'), ['class' => 'form-control']) !!}
    </div>
</div>
<div class="col-sm-6">
    <div class="form-group" id="phone">
        {!! Form::label('phone', 'Nomer Handphone ', ['class'=>'placeholder']) !!}
        {!! Form::input('phone', 'phone', old('phone'), ['class' => 'form-control']) !!}
    </div>
</div>
<div class="col-md-6">
    <div class="form-group" id="outlet_id">
        {!! Form::label('outlet_id', 'Outlet', ['class'=>'placeholder']) !!}
        {!! Form::select('outlet_id', $outlets, old('outlet_id'), ['placeholder' => 'Pilih Outlet','style' => 'width:100%;']) !!}
    </div>
</div>
