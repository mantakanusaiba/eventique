<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventique Login</title>
    <!-- Bootstrap CSS -->
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
        <h2 class="title mb-4">Login</h2>
        <form>
            <div class="mb-3 input-group">
                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                <input type="email" class="form-control" placeholder="E-mail" required>
            </div>
            <div class="mb-4 input-group">
                <span class="input-group-text"><i class="bi bi-lock"></i></span>
                <input type="password" class="form-control" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-custom">SUBMIT</button>
        </form>
        <div class="login-link">
            Don't have an account? <a href="/registration#">Sign Up</a>
        </div>
    </div>

    <!-- Bootstrap Icons and JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</body>
</html>
