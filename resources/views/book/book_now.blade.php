<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventique - Book Now</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fdf8f4;
            color: #5a3225;
            padding-top: 70px; 
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

        .hero-section {
            background-color: #fdf8f4;
            height: 10vh; 
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 10px 0; 
        }

        .hero-section h2 {
            font-size: 40px;
            font-weight: bold;
            font-style: italic;
            color: #5a3225;
        }

        .form-section {
            margin-top: 50px;
        }

        .form-section .form-label {
            font-weight: bold;
            font-size: 25px; 
            margin-bottom: 10px;
        }

        .form-section input, .form-section select, .form-section textarea {
            width: 100%;
            margin-bottom: 15px;
            padding: 12px;
            font-size: 1rem;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .form-section button {
            width: 100%;
            background-color: #c49a6c;
            color: white;
            border: none;
            padding: 12px;
            cursor: pointer;
            font-size: 1.1rem;
        }

        .form-section button:hover {
            background-color: #a87b56;
        }

        .form-check {
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            font-size: 1.1rem;
        }

        .form-check input {
            margin-right: 15px;
            height: 18px;
            width: 18px;
        }

        .lower-section {
            padding: 40px 10px;
            background-color: #fdf8f4;
        }

        .text-center {
            padding-top: 30px;
        }
    </style>
</head>
<body>

@include('navbar')

<section class="hero-section">
    <div>
        <h2>Book Your Event</h2>
    </div>
</section>

<div class="container form-section">
    <form action="{{ route('book.store') }}" method="POST">
        @csrf
        
        <!-- Event Type -->
        <div class="mb-3">
            <label class="form-label">Event Type</label>
            <div class="d-block">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="event_type[]" value="Wedding">
                    <label class="form-check-label">Wedding</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="event_type[]" value="Birthday Party">
                    <label class="form-check-label">Birthday Party</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="event_type[]" value="Corporate Event">
                    <label class="form-check-label">Corporate Event</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="event_type[]" value="Private Party">
                    <label class="form-check-label">Private Party</label>
                </div>
                <input type="text" class="form-control" name="event_type_other" placeholder="Other (Specify)">
            </div>
        </div>

        <!-- Venue Details -->
        <div class="mb-3">
            <label class="form-label">Do you have a venue?</label>
            <select class="form-select" name="venue" id="venueSelect" required>
                <option value="" selected disabled>Select</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>
            <input type="text" class="form-control mt-2 d-none" name="venue_address" id="venueAddress" placeholder="Venue Address">
        </div>

        <!-- Guest Count & Budget -->
        <div class="mb-3">
            <label class="form-label">Guest Count</label>
            <input type="number" class="form-control" name="guest_count" placeholder="Estimated Number" min="1" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Budget Range</label>
            <select class="form-select" name="budget" required>
                <option value="" selected disabled>Select</option>
                <option value="Low">Low</option>
                <option value="Medium">Medium</option>
                <option value="High">High</option>
            </select>
        </div>

        <!-- Special Requests -->
        <div class="mb-3">
            <label class="form-label">Special Requests</label>
            <textarea class="form-control" name="special_requests" rows="3"></textarea>
        </div>

        <!-- Date & Time -->
        <div class="mb-3">
            <label class="form-label">Event Date</label>
            <input type="date" class="form-control" name="event_date" id="eventDate" required>
        </div>
        <div class="mb-3 d-flex gap-3">
            <div>
                <label class="form-label">Start Time</label>
                <input type="time" class="form-control" name="start_time" required>
            </div>
            <div>
                <label class="form-label">End Time</label>
                <input type="time" class="form-control" name="end_time" required>
            </div>
        </div>

        <!-- Services Needed -->
        <div class="mb-3">
            <label class="form-label">Services Needed</label>
            <div class="d-block">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="services[]" value="Event Planning">
                    <label class="form-check-label">Event Planning & Coordination</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="services[]" value="Decorations">
                    <label class="form-check-label">Decorations & Themes</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="services[]" value="Catering">
                    <label class="form-check-label">Catering & Menu Planning</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="services[]" value="Entertainment">
                    <label class="form-check-label">Entertainment (Music, Performers, etc.)</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="services[]" value="Photography">
                    <label class="form-check-label">Photography/Videography</label>
                </div>
                <input type="text" class="form-control" name="services_other" placeholder="Other (Specify)">
            </div>
        </div>

        <!-- Submit Button -->
        <div class="text-center">
            <button type="submit">Submit</button>
        </div>
    </form>
</div>

<script>
    document.getElementById('venueSelect').addEventListener('change', function() {
        document.getElementById('venueAddress').classList.toggle('d-none', this.value !== 'Yes');
    });

    document.getElementById('eventDate').setAttribute('min', new Date().toISOString().split('T')[0]);
</script>

</body>
</html>
