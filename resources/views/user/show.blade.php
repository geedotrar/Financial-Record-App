@extends('layouts.layout')

@section('title', 'User - View')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="PUT" action="{{route('admin.users.update',$user->id)}}">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Name" value="{{old('name',$user->name)}}">
                @error('name')
                    <div class="error-message">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Email" value="{{old('email',$user->email)}}">
                @error('email')
                    <div class="error-message">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control" id="username" placeholder="Username" value="{{old('username',$user->username)}}">
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
                    <option value="" {{ old('role', $user->role) === '' ? 'selected' : '' }}>Choose Role</option>
                    <option value="admin" {{ old('role', $user->role) === 'admin' ? 'selected' : '' }}>Admin</option>
                    <option value="user" {{old('role',$user->role) === 'user' ? 'selected' : ''}}>User </option>
                    </select>
                @error('role')
                    <div class="error-message">{{$message}}</div>
                @enderror
            </div>
        </div>
        
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</body>
</html>
@endsection
