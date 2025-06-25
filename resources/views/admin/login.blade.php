<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <style>
        body {
            background: #f5e9f4;
            font-family: Arial, sans-serif;
            text-align: center;
            padding-top: 100px;
        }
        .login-box {
            background: white;
            padding: 40px;
            border-radius: 10px;
            width: 300px;
            margin: auto;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        input {
            margin: 10px 0;
            width: 100%;
            padding: 10px;
        }
        button {
            padding: 10px 20px;
            background-color: #e74c3c;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .error {
            color: red;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="login-box">
        <h2>Login As Administrator</h2>

        @if($errors->any())
            <div class="error">{{ $errors->first() }}</div>
        @endif

        <form method="POST" action="{{ route('admin.login.submit') }}">
            @csrf
            <input type="email" name="email" placeholder="Email" required autocomplete="username"><br>
            <input type="password" name="password" placeholder="Password" required autocomplete="current-password"><br>
            <button type="submit">Log In</button>
        </form>
    </div>
</body>
</html>

