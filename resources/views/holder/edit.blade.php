@extends('app')

@section('content')

    <h1>Edit Holder</h1>
    <hr/>

    {!! Form::model($holder, [
        'method' => 'PATCH',
        'route' => ['holder.update', $holder->id],
        'class' => 'form-horizontal'
    ]) !!}

    <div class="form-group {{ $errors->has('gender') ? 'has-error' : ''}}">
        {!! Form::label('gender', 'Gender: ', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::select('gender', array('Mr' => 'Mr', 'Mrs' => 'Mrs'), null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Select Gender...']) !!}
            {!! $errors->first('gender', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

    <div class="form-group {{ $errors->has('givenname') ? 'has-error' : ''}}">
        {!! Form::label('givenname', 'Givenname: ', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text('givenname', null, ['class' => 'form-control', 'required' => 'required']) !!}
            {!! $errors->first('givenname', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('surname') ? 'has-error' : ''}}">
        {!! Form::label('surname', 'Surname: ', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text('surname', null, ['class' => 'form-control', 'required' => 'required']) !!}
            {!! $errors->first('surname', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('address') ? 'has-error' : ''}}">
        {!! Form::label('address', 'Address: ', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text('address', null, ['class' => 'form-control', 'required' => 'required']) !!}
            {!! $errors->first('address', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('zip') ? 'has-error' : ''}}">
        {!! Form::label('zip', 'Zip: ', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::number('zip', null, ['class' => 'form-control', 'required' => 'required']) !!}
            {!! $errors->first('zip', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('location') ? 'has-error' : ''}}">
        {!! Form::label('location', 'Location: ', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text('location', null, ['class' => 'form-control', 'required' => 'required']) !!}
            {!! $errors->first('location', '<p class="help-block">:message</p>') !!}
        </div>
    </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection