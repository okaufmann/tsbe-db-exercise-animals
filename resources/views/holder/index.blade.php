@extends('app')

@section('content')

    <h1>Holders <a href="{{ route('holder.create') }}" class="btn btn-primary pull-right btn-sm">Add New Holder</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>Givenname</th>
                    <th>Surname</th>
                    <th>Address</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($holders as $item)
                    <tr>
                        <td>{{ $item->gender }}</td>
                        <td><a href="{{ url('/holder', $item->id) }}">{{ $item->givenname }}</a></td>
                        <td>{{ $item->surname }}</td>
                        <td>{{ $item->address }}</td>
                        <td>
                            <a href="{{ route('holder.edit', $item->id) }}">
                                <button type="submit" class="btn btn-primary btn-xs">Update</button>
                            </a> /
                            {!! Form::open([
                                'method'=>'DELETE',
                                'route' => ['holder.destroy', $item->id],
                                'style' => 'display:inline'
                            ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $holders->render() !!} </div>
    </div>

@endsection
