<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventique Sign Up</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #1a1a1a;
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 450px;
            background: #fdfaf6;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            margin-top: 50px;
        }
        .title {
            font-weight: bold;
            text-align: center;
            font-size: 24px;
            color: #4b2e1e;
        }
        .form-control {
            border: none;
            border-bottom: 2px solid #4b2e1e;
            border-radius: 0;
            padding-left: 40px;
            background-color: transparent;
        }
        .input-group-text {
            background: none;
            border: none;
            color: #4b2e1e;
        }
        .btn-custom {
            background-color: #c49a6c;
            color: white;
            width: 100%;
            border: none;
            font-weight: bold;
        }
        .btn-custom:hover {
            background-color: #a87b56;
        }
        .login-link {
            text-align: center;
            margin-top: 15px;
        }
        .login-link a {
            font-weight: bold;
            color: #4b2e1e;
            text-decoration: none;
        }
        .login-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2 class="title mb-4">SIGN UP</h2>
        <form action="{{ route('register-user') }}" method="POST">
            @if (Session::has('success'))
            <div class="alert alert-success">{{ Session::get('success') }}</div>
            @endif
            @if (Session::has('fail'))
            <div class="alert alert-danger">{{ Session::get('fail') }}</div>
            @endif

            @csrf
            <div class="mb-3 input-group">
                <span class="input-group-text"><i class="bi bi-person"></i></span>
                <input type="text" name="name" class="form-control" placeholder="Name" value="{{ old('name') }}" required>
                @error('name')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3 input-group">
                <span class="input-group-text"><i class="bi bi-telephone"></i></span>
                <input type="text" name="phone" class="form-control" placeholder="Phone" value="{{ old('phone') }}">
                @error('phone')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3 input-group">
                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                <input type="email" name="email" class="form-control" placeholder="E-mail" value="{{ old('email') }}" required>
                @error('email')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4 input-group">
                <span class="input-group-text"><i class="bi bi-lock"></i></span>
                <input type="password" name="password" class="form-control" placeholder="Password" required>
                @error('password')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-custom">SUBMIT</button>
        </form>
        <div class="login-link">
            Already have an account? <a href="/login">LOG IN</a>
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</body>
</html>
