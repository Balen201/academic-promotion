@extends('admin.index')

@section('content')




<div class="container">

    <h2 class="text-2xl font-bold my-4 text-white text-center bg-blue-500 py-2 rounded-md">داواکراوە بەرزکەرەکان نوێ </h2>

    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Status</th>
                <th>view</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($completeUsersArray as $item)
            <tr>
                <td class="font-weight-bold">{{ $item->id }}</td>
                <td class="font-weight-bold">{{ $item->name }}</td>
                <td class="font-weight-bold">{{ $item->email }}</td>
                <td class="text-center">
                    @if ($item->status == 'accepted')
                        <span class="badge badge-success">accepted</span>
                    @elseif ($item->status == 'rejected')
                    <span class="badge badge-danger">rejected</span>

                    @else
                    <span class="badge badge-warning">Pending</span>

                    @endif
                </td>
                <td><a href="{{ route('pending', ['userId' => $item->id]) }}" class="btn btn-primary">View Data</a></td>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
