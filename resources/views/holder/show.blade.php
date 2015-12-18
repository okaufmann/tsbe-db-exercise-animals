@extends('app')

@section('content')

    <h1>Holder</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Givenname</th><th>Surname</th><th>Address</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $holder->id }}</td> <td> {{ $holder->givenname }} </td><td> {{ $holder->surname }} </td><td> {{ $holder->address }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection