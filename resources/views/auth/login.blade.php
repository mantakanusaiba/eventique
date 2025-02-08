<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventique Login</title>

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
        .options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
        }
        .options label {
            font-size: 16px;
            color: #4b2e1e;
        }
        .options a {
            color: #4b2e1e;
            text-decoration: none;
            font-size: 16px;
        }
        .options a:hover {
            text-decoration: underline;
        }
        .register-link {
            margin-top: 20px;
            font-size: 16px;
            text-align: center;
        }
        .register-link a {
            font-weight: bold;
            color: #4b2e1e;
            text-decoration: none;
        }
        .register-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="logo">
            <img src="images/logo.png" alt="Eventique Logo"> 
            <h1>EVENTIQUE</h1>
        </div>
        <h2 class="title">Hi! Welcome</h2>
        <form action="{{ route('login-user') }}" method="POST">
            @csrf
            @if (Session::has('success'))
                <div class="alert alert-success">{{ Session::get('success') }}</div>
            @endif
            @if (Session::has('fail'))
                <div class="alert alert-danger">{{ Session::get('fail') }}</div>
            @endif

            <div class="mb-4 input-group">
                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                <input type="email" name="email" class="form-control" placeholder="Username E-mail" required>
            </div>

            <div class="mb-4 input-group">
                <span class="input-group-text"><i class="bi bi-lock"></i></span>
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>

            <div class="options">
                <div>
                    <input type="checkbox" id="rememberMe">
                    <label for="rememberMe">Remember Me</label>
                </div>
                <a href="{{ route('password.request') }}" class="text-decoration-none">Forgot Password?</a>

            </div>

            <button type="submit" class="btn btn-custom mt-4">LOG IN</button>
        </form>

        <div class="register-link">
            Don't have an account? <a href="/registration">SIGN UP</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
