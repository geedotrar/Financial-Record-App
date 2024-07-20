<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>

    <form method="POST" action="{{route('login')}}">
        @csrf
        <div>
            <label for="username">Username</label>
            <input type="text" id="username" name="username" value="{{old('username')}}" placeholder="Enter Username">
            @error('username')
                <div>{{$message}}</div>
            @enderror
        </div>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter Password">
            @error('password')
                <div>{{$message}}</div>
            @enderror
        </div>
        <div>
            <button type="submit">Login</button>
        </div>
        <label for="remember">
            <input type="checkbox" name="remember">Remember me
        </label>
        <p>Don't have an account yet? 
            <a href="{{route('register')}}">Sign up for free</a>
        </p>
    </form>
</body>
</html>
