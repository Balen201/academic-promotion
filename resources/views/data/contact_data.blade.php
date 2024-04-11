@extends('admin.index')


@section('content')

<table class="table table-bordered">
    <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Comment</th>
        </tr>
    </thead>
    <tbody>
        @foreach($contact as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td><textarea class="form-control" rows="3" readonly>{{ $item->comment }}</textarea></td>
            </tr>
        @endforeach
    </tbody>
</table>






@endsection
