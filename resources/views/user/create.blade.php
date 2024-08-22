@extends('layouts.layout')

@section('title', 'Create User')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
</head>

<style>
    .error-message {
        color: red;
        font-size: 0.875em;
        margin-top: 8px;
        text-align: center;
    }
</style>

<body>
    <form method="POST" action="{{route('admin.users.store')}}">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Name">
                @error('name')
                    <div class="error-message">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                @error('email')
                    <div class="error-message">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control" id="username" placeholder="Username">
                @error('username')
                    <div class="error-message">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Password">   
                @error('password')
                    <div class="error-message">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="password_confirmation">Password Confirmation</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Confirm Password">
                @error('password_confirmation')
                <div class="error-message">{{$message}}</div>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="role">Role</label>
                <select id="role" name="role" class="form-control">
                    <option value="">Choose Role</option>
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </select>
                @error('role')
                    <div class="error-message">{{$message}}</div>
                @enderror
            </div>
        </div>
        
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</body>

</html>
@endsection