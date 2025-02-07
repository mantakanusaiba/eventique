<!DOCTYPE html>
<link href="styles.css" rel="stylesheet">
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
            margin: 0 15px;
            color: #5a3225; 
            padding-top: 120px;
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

        .container {
            display: flex;
            flex-wrap: wrap;
            align-items: flex-start;
            gap: 20px;
        }

        .about-content {
            width: 55%;
        }

        .about-content h2 {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .about-content p {
            font-size: 1rem;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .about-content ul {
            list-style-type: disc;
            margin-left: 20px;
            margin-bottom: 20px;
        }

        .about-content ul li {
            font-size: 1rem;
            line-height: 1.6;
            margin-bottom: 10px;
        }

        .about-image {
            width: 40%;
        }

        .about-image img {
            height: 500px;
            width: 100%;
            border-radius: 10px;
        }

        .cta-button {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #c49a6c;
            color: white;
            text-decoration: none;
            font-weight: bold;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .cta-button:hover {
            background-color: #a87b56;
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
            }

            .about-image {
                width: 100%;
                margin-top: 20px;
            }

            .about-content {
                width: 100%;
            }
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light py-3">
    <div class="container">
        <a class="navbar-brand d-flex align-items-left" href="#">
            <img src="images/logo.png" alt="Logo" width="40" height="40" class="me-2"> 
            <span>EVENTIQUE</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/home') }}">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/about') }}">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/contact') }}">CONTACT</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="eventDropdown" role="button">
                        EVENTS
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="eventDropdown">
                        <li><a class="dropdown-item" href="{{ url('/event/wedding') }}">Wedding</a></li>
                        <li><a class="dropdown-item" href="{{ url('/event/reception') }}">Reception</a></li>
                        <li><a class="dropdown-item" href="{{ url('/event/birthday') }}">Birthday</a></li>
                        <li><a class="dropdown-item" href="{{ url('/event/corporate') }}">Corporate Event</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/login') }}">LOG IN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center" href="{{ url('/Profile') }}">
                        <span class="material-icons" style="font-size: 25px; margin-right: 10px;">person</span> 
                        <span></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="about-content">
        <h2>About Eventique</h2>
        <p>At Eventique, we turn your special moments into unforgettable experiences. With expertise in planning and managing events of all types—from weddings and birthdays to corporate gatherings—we bring creativity, precision, and passion to every celebration. Your vision, our commitment—together, we create magic.</p>

        <h3>Why Choose Eventique?</h3>
        <ul>
            <li>Comprehensive Planning: Tailored solutions for events of any size or type.</li>
            <li>Seamless Execution: Meticulous coordination for stress-free celebrations.</li>
            <li>Creative Expertise: Unique themes and innovative ideas to bring your vision to life.</li>
        </ul>

        <p>Let Eventique transform your special moments into lasting memories. Partner with us and make every event extraordinary.</p>
        <a href="#" class="cta-button">Book Now</a>
    </div>

    <div class="about-image">
        <img src="https://www.ied.it/courses/italy/images/milano/continuing-education/714/image-thumb__714__scaleByWidth800/Wedding-and-Private-events-planner-IED-Milano.jpg" alt="Event management image">
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
