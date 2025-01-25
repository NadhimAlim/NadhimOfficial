<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-Up Form</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Roboto", sans-serif;
            font-size: 14px;
            background-size: 200% 100% !important;
            animation: move 10s ease infinite;
            transform: translate3d(0, 0, 0);
            background: #5e5959;
            height: 100vh;
        }

        .user {
            width: 90%;
            max-width: 340px;
            margin: 10vh auto;
        }

        .user__header {
            text-align: center;
            opacity: 0;
            transform: translate3d(0, 500px, 0);
            animation: arrive 500ms ease-in-out 0.7s forwards;
        }

        .user__title {
            font-size: 24px;
            margin-bottom: -10px;
            font-weight: 500;
            color: white;
        }

        .form {
            margin-top: 40px;
            border-radius: 6px;
            overflow: hidden;
            opacity: 0;
            transform: translate3d(0, 500px, 0);
            animation: arrive 500ms ease-in-out 0.9s forwards;
        }

        .form--no {
            animation: NO 1s ease-in-out;
            opacity: 1;
            transform: translate3d(0, 0, 0);
        }

        .form__input {
            display: block;
            width: 100%;
            padding: 20px;
            font-family: "Roboto", sans-serif;
            -webkit-appearance: none;
            border: 0;
            outline: 0;
            transition: 0.3s;
        }

        .form__input:focus {
            background: #f1f1f1;
        }

        .btn {
            display: block;
            width: 100%;
            padding: 20px;
            font-family: "Roboto", sans-serif;
            -webkit-appearance: none;
            outline: 0;
            border: 0;
            color: white;
            background: #ABA194;
            transition: 0.3s;
        }

        .btn:hover {
            background: #8d8178;
        }

        .login-link {
            display: block;
            margin-top: 20px;
            text-align: center;
            color: white;
            text-decoration: none;
            font-size: 14px;
        }

        .login-link:hover {
            text-decoration: underline;
        }

        @keyframes NO {
            from, to {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }

            10%, 30%, 50%, 70%, 90% {
                -webkit-transform: translate3d(-10px, 0, 0);
                transform: translate3d(-10px, 0, 0);
            }

            20%, 40%, 60%, 80% {
                -webkit-transform: translate3d(10px, 0, 0);
                transform: translate3d(10px, 0, 0);
            }
        }

        @keyframes arrive {
            0% {
                opacity: 0;
                transform: translate3d(0, 50px, 0);
            }

            100% {
                opacity: 1;
                transform: translate3d(0, 0, 0);
            }
        }

        @keyframes move {
            0% {
                background-position: 0 0;
            }

            50% {
                background-position: 100% 0;
            }

            100% {
                background-position: 0 0;
            }
        }
    </style>
</head>
<body>
    <div class="user">
        <header class="user__header">
            <h1 class="user__title">Silahkan Ada mendaftar Dahulu</h1>
        </header>

        <form action="{{ route('register') }}" method="POST" class="form">
            @csrf
            <div class="row form__group">
                <input type="text" name="name" placeholder="Name" class="form__input" required>
            </div>
            <div class="row form__group">
                <input type="email" name="email" placeholder="Email" class="form__input" required>
            </div>
            <div class="row form__group">
                <input type="password" name="password" placeholder="Password" class="form__input" required>
            </div>
            <div class="row form__group">
                <input type="password" name="password_confirmation" placeholder="Confirm Password" class="form__input" required>
            </div>
            <div class="row btn flex justify-center items-center">
                <input type="submit" value="Register"  class="btn bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">
            </div>
            <a href="{{ route('login') }}"  class="login-link">Kembali ke halaman login</a>
        </form>
    </div>

    <script>
        const button = document.querySelector('.btn');
        const form = document.querySelector('.form');

        button.addEventListener('click', function() {
            form.classList.add('form--no');
        });
    </script>
</body>
</html>
