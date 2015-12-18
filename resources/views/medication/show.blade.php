@extends('app')

@section('content')

    <h1>Medication</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>"name</th><th>Price</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $medication->id }}</td> <td> {{ $medication->"name }} </td><td> {{ $medication->price }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection