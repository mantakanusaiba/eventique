<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventique</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fdf8f4;
            color: #5a3225;
            padding-top: 150px;
        }

        .navbar {
            position: fixed; 
            top: 0; 
            width: 100%;
            z-index: 1000; 
            padding-bottom: 20px;
            background-color: #fff; 
        }
        .navbar-brand {
            font-size: 24px;
            font-weight: bold;
            color: black; 
            align-content: left;
        }
        .navbar-nav .nav-link {
            font-size: 15px;
            color: #5a3225; 
            font-weight: bold;
        }

        .nav-item.dropdown:hover .dropdown-menu {
            display: block; 
            margin-top: 0; 
        }

        .dropdown-menu {
            transition: all 0.2s ease-in-out;
        }

        .nav-link i {
            font-size: 18px; 
            color: #5a3225; 
        }

        .contact-section {
            margin-top: 30px;
        }

        .contact-details h2 {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center;
        }

        .contact-details p {
            font-size: 1rem;
            line-height: 1.6;
        }

        form input, form textarea, form button {
            width: 100%;
            margin-bottom: 15px;
            padding: 10px;
            font-size: 1rem;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        form button {
            background-color: #c49a6c;
            color: white;
            border: none;
            cursor: pointer;
        }

        form button:hover {
            background-color: #a87b56;
        }
    </style>
</head>
<body>
@include('navbar')

<div class="container contact-section">
    <div class="row align-items-start">
        <div class="col-lg-6 contact-details">
            <h2>Get in Touch with <br>Eventique</h2>
            <p>Please fill out the form below to send us an email.</p>
            <p>We’re here to make your event extraordinary! Whether you have a question, need a consultation, or are ready to start planning, our team is ready to assist. Reach out to us through the form below, call, or email, and we’ll get back to you promptly. Let’s create something unforgettable together!</p>
            <p><strong>E-mail:</strong> eventique@gmail.com</p>
            <p><strong>PHONE NO:</strong> 0131234567</p>
        </div>

        <div class="col-lg-6">
            <form action="{{ route('contact.store') }}" method="POST">
                @csrf
                <input type="text" name="name" placeholder="NAME" required>
                <input type="email" name="email" placeholder="E-MAIL" required>
                <input type="text" name="subject" placeholder="SUBJECT">
                <textarea name="message" placeholder="MESSAGE" rows="6" required></textarea>
                <button type="submit">SUBMIT</button>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
