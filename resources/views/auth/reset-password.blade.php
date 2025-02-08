<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password - Eventique</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <style>
        body {
            background-color: rgb(16, 16, 15);
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            max-width: 550px;
            background: #fdfaf6;
            padding: 60px;
            border-radius: 12px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
            border: 3px solid #4b2e1e;
        }
        .logo {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 30px;
        }
        .logo img {
            height: 50px;
        }
        .logo h1 {
            margin-left: 10px;
            font-size: 32px;
            font-weight: bold;
            color: #4b2e1e;
        }
        .title {
            font-size: 20px;
            color: #4b2e1e;
            text-align: left;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .form-control {
            border: none;
            border-bottom: 3px solid #4b2e1e;
            border-radius: 0;
            padding-left: 50px;
            background-color: transparent;
            font-size: 18px;
        }
        .input-group-text {
            background: none;
            border: none;
            color: #4b2e1e;
            font-size: 20px;
        }
        .btn-custom {
            background-color: #c49a6c;
            color: white;
            width: 100%;
            border: none;
            font-weight: bold;
            font-size: 16px;
            padding: 5px;
        }
        .btn-custom:hover {
            background-color: #a87b56;
        }
        .back-link {
            margin-top: 20px;
            font-size: 16px;
            text-align: center;
        }
        .back-link a {
            font-weight: bold;
            color: #4b2e1e;
            text-decoration: none;
        }
        .back-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
        <img src="{{ asset('images/logo.png') }}" alt="Eventique Logo">

            <h1>EVENTIQUE</h1>
        </div>
        <h2 class="title">Reset Password</h2>
        
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">{{ $errors->first() }}</div>
        @endif

        <form method="POST" action="{{ route('password.update') }}">
            @csrf
            <input type="hidden" name="token" value="{{ request()->route('token') }}">

            <div class="mb-4 input-group">
                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
            </div>

            <div class="mb-4 input-group">
                <span class="input-group-text"><i class="bi bi-lock"></i></span>
                <input type="password" name="password" class="form-control" placeholder="Enter new password" required>
            </div>

            <div class="mb-4 input-group">
                <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
                <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm new password" required>
            </div>

            <button type="submit" class="btn btn-custom mt-4">Reset Password</button>
        </form>

        <div class="back-link">
            <a href="/login">Back to Login</a>
        </div>
    </div>
</body>
</html>
