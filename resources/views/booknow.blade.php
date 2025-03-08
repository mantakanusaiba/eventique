<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Now - {{ $package->name }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fdf8f4;
            color: #5a3225;
        }
        .container {
            margin-top: 50px;
        }
        .card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        .btn-custom {
            background-color: #bfa094;
            color: white;
            padding: 10px 20px;
            border-radius: 25px;
            font-weight: bold;
            border: none;
        }
        .btn-custom:hover {
            background-color: #a48075;
        }
        .hidden {
            display: none;
        }
        .success-card {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1000;
            background-color: #bfa094;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 10 10 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <h1 class="text-center">Book Now - {{ $package->name }}</h1>
            <p class="text-center"><strong>Package Price:</strong> ${{ $package->price }}</p>

            <form action="{{ route('booknow.store', $package->id) }}" method="POST" id="bookingForm">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="guest_count" class="form-label">Number of Guests</label>
                    <input type="number" class="form-control" id="guest_count" name="guest_count" required min="1">
                </div>
                <div class="mb-3">
                    <label for="venue_needed" class="form-label">Do you need a venue?</label>
                    <select class="form-control" id="venue_needed" name="venue_needed" required>
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                    </select>
                </div>

               
                <div class="mb-3">
                    <p><strong>Total Price:</strong> $<span id="totalPrice">0.00</span></p>
                </div>
 
                <button type="button" class="btn btn-custom w-100" id="calculateButton">Calculate Total</button>

               
                <div id="submitSection" class="hidden">
                    <button type="submit" class="btn btn-custom w-100 mt-3">Submit Booking</button>
                </div>
            </form>

            @if (session('success') && session('booking'))
    <div class="success-card">
        <h3>🎉 Booking Successful!</h3>
        <p>{{ session('success') }}</p>
        <p><a href="{{ route('booking.show', session('booking')->id) }}" class="btn btn-primary">View Booking Details</a></p>
    </div>
@endif



            @if (session('error'))
                <div class="alert alert-danger mt-4">
                    {{ session('error') }}
                </div>
            @endif
        </div>
    </div>

    <script>
       
        document.getElementById('calculateButton').addEventListener('click', function () {
         
            const packagePrice = {{ $package->price }};
            const guestCount = parseInt(document.getElementById('guest_count').value);
            const venueNeeded = document.getElementById('venue_needed').value === '1';

          
            const venuePrice = venueNeeded ? 500 : 0; 
            const perGuestPrice = 50; 
            const totalPrice = packagePrice + (guestCount * perGuestPrice) + venuePrice;

          
            document.getElementById('totalPrice').textContent = totalPrice.toFixed(2);

           
            document.getElementById('submitSection').classList.remove('hidden');
        });

     
        @if (session('success'))
            let countdown = 3;
            const countdownElement = document.getElementById('countdown');

            const interval = setInterval(() => {
                countdown--;
                countdownElement.textContent = countdown;

                if (countdown === 0) {
                    clearInterval(interval);
                    window.location.href = "{{ route('home') }}"; 
                }
            }, 1000);
        @endif
    </script>
</body>
</html>