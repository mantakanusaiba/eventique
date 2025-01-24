<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventique - About Us</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fdfaf6;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 50px;
            border-bottom: 1px solid #ddd;
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
            color: #c49a6c;
        }

        .container {
            display: flex;
            justify-content: space-between;
            align-items: center; /* Centers content vertically */
            padding: 50px;
            max-width: 1200px;
            margin: auto;
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
            display: flex;
            align-items: flex-start; /* Aligns image relative to content */
        }

        .about-image img {
            height:500px;
            width: 110%;
            border-radius: 10px;
            margin-top: 20px; /* Moves the image slightly downward */
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
                align-items: flex-start;
            }

            .about-image {
                margin-top: 20px;
                width: 100%;
            }
        }
    </style>
</head>
<body>

<header>
    <div class="logo">EVENTIQUE</div>
    <nav>
        <a href="#">HOME</a>
        <a href="#" class="active">ABOUT</a>
        <a href="#">CONTACT</a>
        <a href="#">EVENT</a>
        <a href="#">LOG IN</a>
    </nav>
</header>

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

</body>
</html>
