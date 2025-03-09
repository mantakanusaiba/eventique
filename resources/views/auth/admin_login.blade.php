<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Eventique</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <style>
        body {
            background-color: rgb(16, 16, 15);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: #fdfaf6;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }
        .logo {
            text-align: center;
            margin-bottom: 2rem;
        }
        .logo img {
            width: 100px;
            height: auto;
        }
        .title {
            text-align: center;
            margin-bottom: 1.5rem;
            font-size: 1.5rem;
            color: #4b2e1e;
        }
        .btn-custom {
            width: 100%;
            background-color: #c49a6c;
            color: white;
            padding: 0.75rem;
            border: none;
            border-radius: 4px;
            font-size: 1rem;
        }
        .btn-custom:hover {
            background-color: #a87b56;
        }
        .input-group-text {
            background-color: #e9ecef;
            border: none;
        }
        .form-control {
            border-left: none;
        }
        .back-to-login {
            text-align: center;
            margin-top: 1rem;
        }
        .back-to-login a {
            color: #4b2e1e;
            text-decoration: none;
            font-weight: bold;
        }
        .back-to-login a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <h1>EVENTIQUE</h1>
        </div>
        <h2 class="title">Admin Login</h2>
        <form action="{{ route('admin.login.submit') }}" method="POST">
            @csrf

            <div class="mb-4 input-group">
                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                <input type="email" name="email" class="form-control" placeholder="Admin E-mail" required>
            </div>

            <div class="mb-4 input-group">
                <span class="input-group-text"><i class="bi bi-lock"></i></span>
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>

            <button type="submit" class="btn btn-custom mt-4">LOG IN</button>
        </form>

        
        <div class="back-to-login">
            <a href="{{ route('login') }}">Go Back to User Login Page!</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>