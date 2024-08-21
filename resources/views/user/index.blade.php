@extends('layouts.layout')

@section('title', 'Users')

@section('content')
<div class="container">
    <h1 class="mb-4">Index Users</h1>
    <a href="{{ route('admin.users.create') }}" class="btn btn-primary mb-4">Create User</a>

    <table class="table table-striped">
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
                    <td><button>Update</button></td>
                </tr>
            @endforeach

        </tbody>
    </table>
</div>
@endsection
