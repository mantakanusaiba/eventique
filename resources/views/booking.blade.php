<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Bookings</title>
    <style>
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

       
        body {
            background-color: #f2f4f8;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        
        .container {
            width: 100%;
            max-width: 900px;
            background-color: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

       
        h1 {
            font-size: 36px;
            color: #2c3e50;
            text-align: center;
            margin-bottom: 30px;
            font-weight: 600;
            letter-spacing: 1px;
        }

       
        .success-card {
            background:rgb(227, 201, 193);
            padding: 25px;
            margin-bottom: 20px;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .success-card:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.2);
        }

        .booking-header {
            font-size: 22px;
            font-weight: bold;
            color: #fff;
            margin-bottom: 15px;
        }

        .booking-body {
            font-size: 16px;
            line-height: 1.6;
            color: #333;
        }

        p {
            margin: 10px 0;
        }

       
        hr {
            border: none;
            height: 1px;
            background-color: #ddd;
            margin: 30px 0;
        }

        .no-bookings {
            font-size: 22px;
            color: #e74c3c;
            text-align: center;
            font-weight: bold;
            padding-top: 20px;
        }

        
        @media (max-width: 768px) {
            h1 {
                font-size: 28px;
            }

            .container {
                padding: 20px;
            }

            .success-card {
                padding: 20px;
            }

            .booking-header {
                font-size: 20px;
            }

            .booking-body {
                font-size: 14px;
            }

            .no-bookings {
                font-size: 18px;
            }
        }

       
        .button {
            background-color: #3498db;
            color: white;
            padding: 12px 30px;
            text-align: center;
            text-decoration: none;
            border-radius: 30px;
            display: inline-block;
            margin-top: 20px;
            font-size: 16px;
            font-weight: 500;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .button:hover {
            background-color: #2980b9;
            transform: translateY(-2px);
        }

        .button:active {
            transform: translateY(0);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🎉 All Booking Confirmations</h1>

        @if(count($bookings) > 0)
            @foreach($bookings as $booking)
                <div class="success-card">
                    <div class="booking-header">
                        <h3>Booking Details</h3>
                    </div>
                    <div class="booking-body">
                        <p><strong>Email:</strong> {{ $booking->email }}</p>
                        <p><strong>Guest Count:</strong> {{ $booking->guest_count }}</p>
                        <p><strong>Venue Needed:</strong> {{ $booking->venue_needed ? 'Yes' : 'No' }}</p>
                        <p><strong>Total Price:</strong> ${{ $booking->total_price }}</p>
                    </div>
                </div>
                <hr>
            @endforeach
        @else
            <p class="no-bookings">No bookings found.</p>
        @endif

        <a href="#" class="button">Back to Dashboard</a>
    </div>
</body>
</html>
