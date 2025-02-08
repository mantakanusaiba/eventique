<nav class="navbar navbar-expand-lg navbar-light bg-light py-3">
    <div class="container">
        <a class="navbar-brand d-flex align-items-left" href="#">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" width="40" height="40" class="me-2"> 
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
                        <li><a class="dropdown-item" href="{{ url('/wedding-packages') }}">Wedding</a></li>
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


