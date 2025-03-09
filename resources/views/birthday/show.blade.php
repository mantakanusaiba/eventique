<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $package->name }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

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
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .card-body {
            padding: 20px;
        }

        .card-title {
            font-size: 24px;
            font-weight: bold;
            color: #5a3225;
        }

        .package-img {
            width: 100%;
            height: 300px;
            background-size: cover;
            background-position: center;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }

        .btn-custom {
            background-color: #bfa094;
            color: white;
            padding: 10px 20px;
            border-radius: 25px;
            font-weight: bold;
            border: none;
            text-decoration: none;
        }

        .btn-custom:hover {
            background-color: #a48075;
        }
    </style>
</head>
<body>

    <div class="container my-5">
        <div class="card">
            <div class="package-img" style="background-image: url('{{ asset($package->image_url) }}');"></div>
            <div class="card-body">
                <h5 class="card-title">🎂 {{ $package->name }}</h5>
                <p><strong>Description:</strong> {{ $package->description }}</p>
                <p><strong>Price:</strong> ${{ $package->price }}</p>
                <p><strong>Photography:</strong> {{ $package->photography ? 'Included' : 'Not Included' }}</p>
                <p><strong>Birthday Cake:</strong> {{ $package->birthday_cake ? 'Included' : 'Not Included' }}</p>
                <p><strong>Extra Decorations:</strong> {{ $package->extra_decorations ? 'Included' : 'Not Included' }}</p>
                <p><strong>Details:</strong> {{ $package->detailed_info }}</p>
                <p><strong>Timeline:</strong> {{ $package->timeline }}</p>

                <div class="d-flex justify-content-between mt-4">
                    <a href="{{ route('birthday.index') }}" class="btn btn-secondary">← Back to Packages</a>
                    <a href="{{ route('booknow.show', ['id' => $package->id]) }}" class="btn btn-custom">Book Now</a>
                </div>
            </div>
        </div>
    </div>

</body>
</html>