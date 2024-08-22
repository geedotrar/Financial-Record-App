@extends('layouts.layout')

@section('title', 'Users')

<style>
.form-container {
  max-width: 100%;
  overflow-x: hidden;
  overflow-y: hidden;
}

</style>

@section('content')
<div>
    <h1 class="mb-4">User Lists</h1>
    <a href="{{ route('admin.users.create') }}" class="btn btn-primary mb-4">Create User</a>

    <table class="table table-striped form">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->username}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <a href="{{ route('admin.users.show', $user->id) }}" class="btn btn-info btn-sm">View</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
