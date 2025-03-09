<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Eventique</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #fdf8f4;
            font-family: 'Arial', sans-serif;
        }
        .navbar {
            background-color: #5a3225;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .navbar h1 {
            color: #fdfaf6;
            margin: 0;
            font-size: 24px;
            font-weight: bold;
        }
        .logout-btn {
            background-color: #c49a6c;
            border: none;
            color: white;
            padding: 8px 16px;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
        }
        .logout-btn:hover {
            background-color: #a87b56;
        }
        .container {
            margin-top: 40px;
            text-align: center;
        }
        .dashboard-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 40px;
        }
        .dashboard-card {
            background-color: #fdfaf6;
            border: 2px solid #4b2e1e;
            border-radius: 12px;
            padding: 20px;
            width: 300px;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .dashboard-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
        }
        .dashboard-card h2 {
            color: #4b2e1e;
            font-size: 22px;
            margin-bottom: 15px;
        }
        .dashboard-card a {
            text-decoration: none;
            color: #c49a6c;
            font-weight: bold;
            font-size: 18px;
        }
        .dashboard-card a:hover {
            color: #a87b56;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <h1>Admin Dashboard</h1>
        <form action="{{ route('admin.logout') }}" method="POST">
            @csrf
            <button type="submit" class="logout-btn">Logout</button>
        </form>
    </div>

    <div class="container">
        <h1>Welcome to Admin Dashboard</h1>
        <p>Manage your events and bookings efficiently.</p>

        <div class="dashboard-container">
            <div class="dashboard-card">
                <h2>Event Packages</h2>
                <a href="{{ route('event.packages') }}">Go to Event Packages</a>
            </div>

            <div class="dashboard-card">
                <h2>Show Bookings</h2>
                <a href="{{ route('show.bookings') }}">Go to Show Bookings</a>
            </div>
        </div>
    </div>
</body>
</html>