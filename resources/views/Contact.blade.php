<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventique - Contact Us</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 0;
            background-color:#fdfaf6; /* background */
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 50px;
            border-bottom: 1px solid #ddd; /* Line under navigation bar */
        }

        header .logo {
            font-size: 1.8rem;
            font-weight: bold;
            color: #444;
        }

        nav {
            display: flex;
            gap: 20px;
        }

        nav a {
            font-weight: bold;
            text-decoration: none;
            color: #444;
        }

        nav a.active {
            color: #c49a6c; /* Matching the button color */
        }

        .container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            padding: 50px;
            max-width: 1200px;
            margin: auto;
        }

        .contact-details {
            width: 45%;
        }

        .contact-details h2 {
            font-size: 2rem; /* Increased size */
            font-weight: bold; /* Bolder font */
            margin-bottom: 20px;
            line-height: 1.2; /* Adjusted line height for proper spacing */
            text-align: center; /* Center-aligned text */
        }

        .contact-details p {
            font-size: 1rem;
            line-height: 1.6;
            margin-bottom: 10px;
        }

        .contact-details p span {
            font-weight: bold;
        }

        form {
            width: 45%;
        }

        form input, form textarea, form button {
            display: block;
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
            font-size: 1rem;
            padding: 10px 15px;
            transition: background-color 0.3s ease;
        }

        form button:hover {
            background-color: #a87b56;
        }
    </style>
</head>
<body>

<header>
    <div class="logo">EVENTIQUE</div>
    <nav>
        <a href="#">HOME</a>
        <a href="#">ABOUT</a>
        <a href="#" class="active">CONTACT</a>
        <a href="#">EVENT</a>
        <a href="#">LOG IN</a>
    </nav>
</header>

<div class="container">
    <div class="contact-details">
        <h2>Get in Touch with <br>Eventique</h2>
        <p>Please fill out the form below to send us an email.</p>
        <p>We’re here to make your event extraordinary! Whether you have a question, need a consultation, or are ready to start planning, our team is ready to assist. Reach out to us through the form below, call, or email, and we’ll get back to you promptly. Let’s create something unforgettable together!</p>
        <p><span>E-mail:</span> eventique@gmail.com</p>
        <p><span>PHONE NO:</span> 0131234567</p>
    </div>

    <form action="{{ route('contact.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="NAME" required>
        <input type="email" name="email" placeholder="E-MAIL" required>
        <input type="text" name="subject" placeholder="SUBJECT">
        <textarea name="message" placeholder="MESSAGE" rows="6" required></textarea>
        <button type="submit">SUBMIT</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
