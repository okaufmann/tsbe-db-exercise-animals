@extends('app')

@section('content')

    <h1>Animal</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th>
                    <th>name</th>
                    <th>Birthday</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $animal->id }}</td>
                    <td> {{ $animal->name }} </td>
                    <td> {{ $animal->birthday }} </td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection