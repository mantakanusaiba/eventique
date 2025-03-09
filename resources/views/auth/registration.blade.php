<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventique Sign Up</title>

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
       
        <form action="{{ route('register-user') }}" method="POST">
            @if (Session::has('success'))
                <div class="alert alert-success">{{ Session::get('success') }}</div>
            @endif
            @if (Session::has('fail'))
                <div class="alert alert-danger">{{ Session::get('fail') }}</div>
            @endif
            @csrf
            <div class="mb-4 input-group">
                <span class="input-group-text"><i class="bi bi-person"></i></span>
                <input type="text" name="name" class="form-control" placeholder="Name" value="{{ old('name') }}" required>
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="mb-4 input-group">
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
            <button type="submit" class="btn btn-custom mt-4">SIGN UP</button>
        </form>
        <div class="register-link">
            Already have an account? <a href="/login">LOG IN</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
