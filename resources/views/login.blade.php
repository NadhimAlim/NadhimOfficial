<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            padding: 15px;
            background: #5e5959;
            overflow: hidden;
        }

        .wrapper {
            max-width: 500px;
            width: 100%;
            background: #fff;
            border-radius: 5px;
            box-shadow: 0px 4px 10px 1px rgba(0, 0, 0, 0.1);
        }

        .wrapper .title {
            height: 120px;
            background: #aaaaaa;
            border-radius: 5px 5px 0 0;
            color: #fff;
            font-size: 30px;
            font-weight: 600;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .wrapper form {
            padding: 25px 35px;
        }

        .wrapper form .row {
            height: 60px;
            margin-top: 15px;
            position: relative;
        }

        .wrapper form .row input {
            height: 100%;
            width: 100%;
            outline: none;
            padding-left: 70px;
            border-radius: 5px;
            border: 1px solid lightgrey;
            font-size: 18px;
            transition: all 0.3s ease;
        }

        form .row input:focus {
            border-color: #aaaaaa;
        }

        form .row input::placeholder {
            color: #999;
        }

        .wrapper form .row i {
            position: absolute;
            width: 55px;
            height: 100%;
            color: #fff;
            font-size: 22px;
            background: #aaaaaa;
            border: 1px solid #aaaaaa;
            border-radius: 5px 0 0 5px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .wrapper form .button input {
            margin-top: 20px;
            color: #fff;
            font-size: 20px;
            font-weight: 500;
            background: #aaaaaa;
            border: 1px solid #aaaaaa;
            cursor: pointer;
        }

        form .button input:hover {
            background: #888888;
        }

        .wrapper form .pass {
            margin-top: 10px;
            text-align: right;
        }

        .wrapper form .pass a {
            color: #aaaaaa;
            text-decoration: none;
            font-size: 14px;
        }

        .wrapper form .pass a:hover {
            text-decoration: underline;
        }

        .wrapper form .signup-link {
            text-align: center;
            margin-top: 20px;
            font-size: 17px;
        }

        .wrapper form .signup-link a {
            color: #aaaaaa;
            text-decoration: none;
        }

        form .signup-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    {{-- <div class="wrapper">
    <div class="title"><span>Login Form</span></div>
    <form action="#">
      <div class="row">
        <i class="fas fa-user"></i>
        <input type="text" placeholder="Email or Phone" required />
      </div>
      <div class="row">
        <i class="fas fa-lock"></i>
        <input type="password" placeholder="Password" required />
      </div>
      <div class="pass"><a href="#">Forgot password?</a></div>
      <div class="row button">
        <input type="submit" value="Login" />
      </div>
      <div class="signup-link">Not a member? <a href="{{ route('register') }}">Signup now</a></div>

    </form>
  </div> --}}

    @extends('layouts.app')

    @section('content')
        <div class="wrapper">
            <div class="title"><span>Login Form</span></div>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="row">
                    <i class="fas fa-user"></i>
                    <input type="email" name="email" placeholder="Email" required>
                </div>
                <div class="row">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <div class="row button">
                    <input type="submit" value="Login">
                </div>
                <div class="signup-link">Not a member? <a href="{{ route('register') }}">Signup now</a></div>
            </form>
        </div>
    @endsection

</body>

</html>
