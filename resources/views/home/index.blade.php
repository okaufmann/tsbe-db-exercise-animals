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
                        <label for="givenname">Givenname:</label>
                        <input type="text" class="form-control" name="givenname"/>
                        <label for="surname">Surname:</label>
                        <input type="text" class="form-control" name="surename"/><br/>
                        <input type="submit" class="btn btn-primary" value="Send"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
