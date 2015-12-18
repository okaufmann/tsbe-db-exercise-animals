@extends('app')

@section('content')

    <h1>Medications <a href="{{ route('medication.create') }}" class="btn btn-primary pull-right btn-sm">Add New
                                                                                                         Medication</a>
    </h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($medications as $item)
                    <tr>
                        <td><a href="{{ url('/medication', $item->id) }}">{{ $item->name }}</a></td>
                        <td>{{ $item->price }}</td>
                        <td>
                            <a href="{{ route('medication.edit', $item->id) }}">
                                <button type="submit" class="btn btn-primary btn-xs">Update</button>
                            </a> /
                            {!! Form::open([
                                'method'=>'DELETE',
                                'route' => ['medication.destroy', $item->id],
                                'style' => 'display:inline'
                            ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $medications->render() !!} </div>
    </div>

@endsection
