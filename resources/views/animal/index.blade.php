@extends('app')

@section('content')

    <h1>Animals <a href="{{ route('animal.create') }}" class="btn btn-primary pull-right btn-sm">Add New Animal</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Birthday</th>
                    <th>Sex</th>
                    <th>Holder</th>
                    <th>Race</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($animals as $item)
                    <tr>
                        <td><a href="{{ url('/animal', $item->id) }}">{{ $item->name }}</a></td>
                        <td>{{ $item->birthday }}</td>
                        <td>{{ $item->sex }}</td>
                        <td>{{ $item->holder->givenname }}</td>
                        <td>{{ $item->race->name }}</td>
                        <td>
                            <a href="{{ route('animal.edit', $item->id) }}">
                                <button type="submit" class="btn btn-primary btn-xs">Update</button>
                            </a> /
                            {!! Form::open([
                                'method'=>'DELETE',
                                'route' => ['animal.destroy', $item->id],
                                'style' => 'display:inline'
                            ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $animals->render() !!} </div>
    </div>

@endsection
