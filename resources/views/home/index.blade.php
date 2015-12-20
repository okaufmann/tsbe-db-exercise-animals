@extends('app')

@section('content')
    <h2>Find Medications for a Holder's Animal</h2>

    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Holders Infos</h3>
                </div>
                <div class="panel-body">
                    <form action="{{url('/')}}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            {!! Form::label('givenname', 'Givenname: ') !!}
                            {!! Form::text('givenname', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('surname', 'Surname: ') !!}
                            {!! Form::text('surname', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::submit('Send', ['class' => 'btn btn-primary']) !!}
                            {!! Form::reset('Reset', ['class' => 'btn btn-default']) !!}
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-md-6">
            @if(isset($holder))
                <p class="lead">Results:</p>
                <ul>
                    @foreach($holder->animals as $animal)
                        <li><b>{{$animal->name}}</b> had the following medication
                            <ul>
                                @forelse ($animal->medications as $medication)
                                    <li>{{$medication->name}}</li>
                                @empty
                                    <li>No medication needed yet, it's a health one!</li>
                                @endforelse
                            </ul>
                        </li>
                    @endforeach
                </ul>
            @endif
            @if(isset($sql))
                <p class="lead text-muted">SQL that was run for this result:</p>
                <div class="well text-muted">
                    {{$sql}}
                </div>
            @endif
        </div>
    </div>
@stop
