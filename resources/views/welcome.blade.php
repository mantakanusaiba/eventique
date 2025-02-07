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
    margin-left: 15px;
    margin-right: 15px;
    color: #5a3225; 
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
        .hero-section {
            background-image: url('images/bg1.jpg');
            background-size: cover;
            background-position: center;
            height: 70vh;
            display: flex;
            justify-content: center;
            text-align:center; 
            color: #614b41;
            align-items:center;
              
        }
        .hero-section h2 {
            font-size: 35px;
            font-weight: bold;
            margin-bottom: 10px;
            
        }
        .hero-section p {
            font-size: 18px;
            margin-bottom: 20px;
        }
        .btn-book {
            background-color: #bfa094;
            color: white;
            padding: 8px 15px;
            font-size: 15px;
            border: none;
            border-radius: 20px;
            text-align: center;
            transition: background-color 0.3s ease;
        }
        .btn-book:hover {
            background-color: #a48075;
        }
        .lower-section {
            padding-left: 10px;  
            padding-right: 10px;
            margin: 40px auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .left-content {
            flex: 1;
            text-align: center;
            margin-right: 50px;
        }
        .left-content p {
            font-size: 16px;
            color: #614b41;
            margin-bottom: 15px;
        }
        .right-content {
            flex: 3;
            display: flex;
            gap: 23px;
        }
        .image-wrapper {
            flex: 1;
        }
        .right-content img {
            width: 100%;
            height: 200px; 
            object-fit: cover; 
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }


        .container {
            text-align: center; 
        }

        .event-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between; 
            margin-top: 50px;
            margin-bottom:50px;
        }

        .event-item {
           display: flex; 
        }

        .event-image {
    width: 450px; 
    aspect-ratio: 3/2;
    object-fit: cover;
}

        .event-details {
            margin-top: 10px;
            text-align: left; 
        }

        
        .read-more-btn  {
            background-color: #bfa094;
            color: white;
            padding: 8px 15px;
            font-size: 15px;
            border: none;
            border-radius: 20px;
            text-align: center;
            transition: background-color 0.3s ease;
        }
        .read-more-btn k:hover {
            background-color: #a48075;
        }

    .image-text-container {
    display: flex;
    flex-direction: row; 
    gap: 40px;  
    align-items: center; 
}

.image-text-container {
    display: flex;
    flex-direction: row-reverse;
    justify-content: center;
    align-items: center;
    gap: 40px;
}

@media (min-width: 768px) { 
    .image-text-container {
        flex-direction: row; 
    }
}



.featured-services {
    background-color: #fdf8f4;
}

.section-title {
    font-size: 40px;
    font-weight: bold;
    color: #5a3225;
    margin-bottom: 40px;
}

.service-item {
    margin-bottom: 30px;
}

.service-image {
    border-radius: 5px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin-bottom: 15px;
    height: 200px; 
    object-fit: cover;
}

.service-description {
    font-size: 16px;
    color: #5a3225;
    font-weight: 500;
    line-height: 1.6;
    padding: 0 10px;
}
.service-image {
    width: 95%; 
    height: 200px; 
    object-fit: cover; 
    border-radius: 5px; 
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
    margin-bottom: 15px;
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


</style>
</head>
<body>

@include('navbar')


    <section class="hero-section">
    <div>
        <h2>Entertainment</h2>
        <h2>Interaction</h2>
        <h2>Elegance</h2>
    </div>
</section>


    <section class="container lower-section">
        <div class="left-content">
            <p>
                Eventique is your trusted partner in event management, specializing in creating unforgettable experiences for all occasions. 
                From grand weddings and corporate galas to intimate gatherings, our expert team ensures every detail is perfectly planned and executed.
            </p>
            <a href="#" class="btn btn-book">BOOK NOW</a>
        </div>


        <div class="right-content">
            <div class="image-wrapper">
                <img src="{{ asset('images/img5.jpg') }}" alt="Image 1">
            </div>
            <div class="image-wrapper">
                <img src="{{ asset('images/img2.jpg') }}" alt="Image 2">
            </div>
            <div class="image-wrapper">
                <img src="{{ asset('images/img4.webp') }}" alt="Image 3">
            </div>
        </div>
    </section>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


<div class="container">
    
    <h2 class="section-title">Events</h2>
    <div class="event-container">
        <div class="event-item">
            <div class="image-text-container"> <img src="images/img9.jpg" alt="Wedding" class="event-image">
                <div class="event-details">
                    <h2>Wedding</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <a href="{{ url('wedding-packages') }}" class="read-more-btn">Read More</a>              
                </div>
            </div>
        </div>
     </div>   

     <div class="event-item">
            <div class="image-text-container">
                <div class="event-details">
                    <h2>Birthday Party</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <a href="#" class="read-more-btn">Read More</a>   
                </div>
                <div class="image-container"> 
                    <img src="{{ asset('images/img7.jpeg') }}" alt="Birthday Party" class="event-image"> 
                </div>
            </div>
        </div>

        <div class="event-container">
        <div class="event-item">
            <div class="image-text-container"> <img src="images/img11.jpg" alt="Corporate event" class="event-image">
                <div class="event-details">
                    <h2>Corporate Event </h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <a href="#" class="read-more-btn">Read More</a> 
                </div>
            </div>
        </div>
     </div>  

    </div>
</div>



<section class="featured-services text-center py-5">
        <h2 class="section-title">Our featured services</h2>
        <div class="container">
            <div class="row">
                <div class="col-md-4 service-item">
                    <img src="images/img15.webp" alt="Photography" class="service-image img-fluid">
                    <p class="service-description">
                        WE HAVE THE INDUSTRY'S BEST PHOTOGRAPHERS TO GIVE YOU COMPLETE FLEXIBILITY OVER PRICE/QUALITY CHOICE.
                    </p>
                </div>
                <div class="col-md-4 service-item">
                    <img src="images/img13.jpg" alt="Decor" class="service-image img-fluid">
                    <p class="service-description">
                        GET THE BEST DECOR AT THE BEST OF PRICE, WE HAVE WEDDING SPECIALISTS ENLISTED WITH US TO DESIGN YOUR WEDDING YOUR WAY!
                    </p>
                </div>
                <div class="col-md-4 service-item">
                    <img src="images/img10.jpg" alt="Catering" class="service-image img-fluid">
                    <p class="service-description">
                        OUR TEAM OF EXPERIENCED CHEFS TAKES GREAT CARE IN CRAFTING THE PERFECT MENU FOR YOUR EVENT.
                    </p>
                </div>
            </div>
        </div>
    </section>

    





<footer class="bg-light py-4" style="background-color: #bfa094;">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h5>About Us</h5>
                <p>Eventique is your trusted partner in event management, creating unforgettable experiences for every occasion.</p>
            </div>
            <div class="col-md-4">
                <h5>Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/about') }}">About</a></li>
                    <li><a href="{{ url('/contact') }}">Contact</a></li>
                    <li><a href="{{ url('/event') }}">Events</a></li>
                    <li><a href="{{ url('/login') }}">Log In</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5>Contact</h5>
                <p>Email:eventique@gmail.com</p>
                <p>Phone: 123456789</p>
                <p>Address: 123 Event, City, Country</p>
            </div>
        </div>
    </div>
    <div class="text-center py-3" style="background-color: #f1f1f1;">
        <p>&copy; 2025 Eventique. All Rights Reserved.</p>
    </div>
</footer>


