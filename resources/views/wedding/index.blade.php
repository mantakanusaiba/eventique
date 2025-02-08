<!DOCTYPE html>
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
            background-image: url('images/img16.png');
            background-size: cover;
            background-position: center;
            height: 50vh;
            display: flex;
            justify-content: center;
            text-align:center; 
            color: #614b41;
            align-items:center;
            margin-bottom: 100px; 
        }

        .container.mt-8 {
            margin-top: 200px;
            width: 100%;
            max-width: 1400px;
            height:100px;
        }

        .hero-section h2 {
            font-size: 30px;
            margin-bottom: 20px;
            text-align:left;
            font: bold;
        }

        .hero-section p {
            font-size: 18px;
            margin-bottom: 20px;
        }

        .search-bar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            max-width: 1400px;
            margin: 0 auto;
            padding: 15px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            gap: 20px;
        }

        .filter-option, .checkbox-options {
            flex: 1;
        }

        .filter-option select {
            width: 100%;
        }

        .checkbox-options {
            display: flex;
            gap: 10px;
        }

        .btn-warning {
            flex: 0 0 auto;
            padding: 10px 20px;
        }

        .filter-option {
            margin-right: 30px; 
            font-weight: bold;
        }
        .checkbox-options {
            display: flex;
            gap: 20px; 
            margin-right: 30px; 
            margin-top: 20px; 
            font-weight: bold;
        }

        form.d-flex {
            gap: 40px; 
        }
        button.btn.btn-warning {
            font-weight: bold;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .material-icons {
            font-size: 18px;
        }

        button.btn.btn-warning {
            background-color: #bfa094;
            color: white;
            padding: 3px 8px; 
            font-size: 15px;
            border: none;
            border-radius: 25px;
            font-weight: bold;
            margin-right: 30px; 
        }

        button.btn.btn-warning:hover {
            background-color: #a48075;
        }

        .package-title {
            text-align: center;
            font-size: 36px;
            margin-bottom: 20px;
        }

        .package-container {
            display: flex;
            flex-wrap: wrap;
            margin: 30px 0;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            text-align: center;
        }

        .package-img-wrapper {
            flex: 1;
            padding: 15px;
        }

        .package-img {
            background-size: cover;
            background-position: center;
            width: 100%;
            height: 200px;
            border-radius: 8px;
        }

        .package-info {
            flex: 2;
            padding: 20px;
            text-align: left;
        }

        .package-info h5 {
            font-size: 24px;
            font-weight: bold;
        }

        .package-info p {
            font-size: 16px;
            color: #555;
        }

        .read-more-btn {
            background-color: #bfa094;
            color: white;
            padding: 8px 15px;
            font-size: 15px;
            border: none;
            border-radius: 20px;
            text-align: center;
            transition: background-color 0.3s ease;
            text-decoration: none;
        }

        .read-more-btn:hover {
            background-color: #a48075;
        }

        .btn-warning {
            background-color: #bfa094;
            color: white;
            padding: 10px 20px;
            border-radius: 25px;
            font-weight: bold;
            display: flex;
            align-items: center;
            gap: 5px;
            border: none;
        }

        .btn-warning:hover {
            background-color: #a48075;
        }

        @media (max-width: 768px) {
            .package-container {
                flex-direction: column;
            }

        }

    </style>
</head>
<body>
    @include('navbar')

    <section class="hero-section">
        <div class="container mt-8">
            <h2> &nbsp&nbspBook your wedding with us</h2>
            <div class="search-bar">
                <form action="" method="GET" class="d-flex w-100">
                    <div class="filter-option">
                        <label for="wedding-type" class="form-label">Wedding Type:</label>
                        <select id="wedding-type" name="wedding_type" class="form-select">
                            <option value="">Select Type</option>
                            <option value="luxury">Luxury</option>
                            <option value="classic">Classic</option>
                            <option value="rustic">Rustic</option>
                            <option value="beach">Beach</option>
                        </select>
                    </div>

                    <div class="checkbox-options">
                        <label><input type="checkbox" name="photography" /> Photography</label>
                        <label><input type="checkbox" name="wedding_cake" /> Wedding Cake</label>
                        <label><input type="checkbox" name="extra_decorations" /> Extra Decorations</label>
                    </div>

                    <button type="submit" class="btn btn-warning d-flex align-items-center">
                        <span class="material-icons">search</span> Search
                    </button>
                </form>
            </div>
        </div>
    </section>

    <div class="row">
        @foreach ($packages as $package)
            <div class="col-md-12">
                <div class="package-container">
                    <div class="package-img-wrapper">
                        <div class="package-img" style="background-image: url('https://www.shutterstock.com/image-photo/wedding-stage-decorations-traditional-setups-260nw-2251978741.jpg');"></div>
                    </div>
                    <div class="package-info">
                        <h5>{{ $package['name'] }}</h5>
                        <p><strong>Price:</strong> ${{ $package['price'] }}</p>
                        <p>{{ $package['description'] }}</p>
                        <ul>
                            @if ($package['photography'])
                                <li>Photography Included</li>
                            @endif
                            @if ($package['wedding_cake'])
                                <li>Wedding Cake Included</li>
                            @endif
                            @if ($package['extra_decorations'])
                                <li>Extra Decorations Included</li>
                            @endif
                        </ul>
                        <a href="/weddings/{{ $package['id'] }}" class="read-more-btn">Read More</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</body>
</html>
