<div class="col-sm-12">
    <div class="form-group" id="name">
        {!! Form::label('name', 'Nama Supplier', ['class'=>'placeholder']) !!}
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
        {!! Form::label('address', 'Alamat Supplier', ['class'=>'placeholder']) !!}
        {!! Form::input('address', 'address', old('address'), ['class' => 'form-control']) !!}
    </div>
</div>
<div class="col-sm-6">
    <div class="form-group" id="phone">
        {!! Form::label('phone', 'Nomer Handphone ', ['class'=>'placeholder']) !!}
        {!! Form::input('phone', 'phone', old('phone'), ['class' => 'form-control']) !!}
    </div>
</div>
<div class="col-sm-6">
    <div class="form-group" id="outlet_id">
        {!! Form::label('outlet_id', 'Outlet', ['class'=>'placeholder']) !!}
        {!! Form::select('outlet_id', $outlets, old('outlet_id'), ['placeholder' => 'Pilih Outlet','class' => 'form-control']) !!}
    </div>
</div>

