@extends('app')

@section('content')
    <h1>Find Medications for a Holder's Animal</h1>
    
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
                  <input type="submit" value="Send"/>
              </form>
    	  </div>
    </div>

@stop
