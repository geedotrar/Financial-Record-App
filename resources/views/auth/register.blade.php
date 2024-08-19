<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
</head>
<style>
    body {
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: sans-serif;
        line-height: 1.5;
        min-height: 100vh;
        background: #f3f3f3;
        flex-direction: column;
        margin: 0;
    }

    .container {
        background-color: #fff;
        border-radius: 15px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        padding: 10px 20px;
        transition: transform 0.2s;
        width: 500px;
        text-align: center;
    }

    button {
        background-color: #04AA6D;
        color: white;
        padding: 8px;
        cursor: pointer;
        width: 100%;
        border: none;
        border-radius: 45px 20px;
    }

    button:hover {
        opacity: 0.8;
    }

    .container {
        padding: 16px;
    }

    .container input {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    .error-message {
        color: red;
        font-size: 0.875em;
        margin-top: 8px;
        text-align: center;
    }
</style>

<body>
    <form method="POST" action="{{route('register')}}">
        @csrf
        <div class="container">
            <div>
                <h1>Register</h1>
                <input type="text" id="username" name="username" value="{{old('username')}}" placeholder="Username">
                @error('username')
                <div class="error-message">{{$message}}</div>
                @enderror
            </div>
            <div>
                <input type="password" id="password" name="password" placeholder="Password">
                @error('password')
                <div class="error-message">{{$message}}</div>
                @enderror
            </div>
            <div>
                <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password">
                @error('password_confirmation')
                <div class="error-message">{{$message}}</div>
                @enderror
            </div>
            <div>
                <button type="submit">Register</button>
            </div>
        </div>
    </form>
</body>

</html>