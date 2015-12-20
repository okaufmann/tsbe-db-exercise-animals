@extends('app')

@section('footer')
    <script type="text/javascript">
        $(".chosen-select").chosen({no_results_text: "Oops, nothing found!"});
    </script>
@stop

@section('content')

    <h1>Create New Animal</h1>
    <hr/>

    {!! Form::open(['route' => 'animal.store', 'class' => 'form-horizontal']) !!}

    <div class="form-group {{ $errors->has('sex') ? 'has-error' : ''}}">
        {!! Form::label('sex', 'Sex: ', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::select('sex', array('m' => 'Male', 'f' => 'Female'), null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Select Sex...']) !!}
            {!! $errors->first('sex', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

    <div class="form-group {{ $errors->has('holder_id') ? 'has-error' : ''}}">
        {!! Form::label('holder_id', 'Holder: ', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::select('holder_id', \App\Holder::lists('givenname','id'), null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Select Holder...']) !!}
            {!! $errors->first('holder_id', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

    <div class="form-group {{ $errors->has('race_id') ? 'has-error' : ''}}">
        {!! Form::label('race_id', 'Race: ', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::select('race_id', \App\Race::lists('name','id'), null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Select Race...']) !!}
            {!! $errors->first('race_id', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

    <div class="form-group {{ $errors->has('medication_ids') ? 'has-error' : ''}}">
        {!! Form::label('medication_ids', 'Used medications: ', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::select('medication_ids[]', \App\Medication::lists('name','id'), null, ['class' => 'form-control chosen-select','multiple'=> '',  'data-placeholder' => 'Select Medications...']) !!}
            {!! $errors->first('medication_ids', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

    <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
        {!! Form::label('name', 'Name: ', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
            {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('birthday') ? 'has-error' : ''}}">
        {!! Form::label('birthday', 'Birthday: ', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::number('birthday', null, ['class' => 'form-control']) !!}
            {!! $errors->first('birthday', '<p class="help-block">:message</p>') !!}
            <p class="help-block">Just the year!</p>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Create', ['class' => 'btn btn-primary']) !!}
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