<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Packages</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fdf8f4;
            margin: 0;
            color: #5a3225;
        }

        .container {
            max-width: 1000px;
            margin-top: 80px;
            padding-left: 0;
        }

        .section-title {
            font-size: 30px; 
            font-weight: bold;
            color: #5a3225;
            margin-bottom: 15px;
            text-align: left; 
        }

        .event-container {
            display: flex;
            flex-wrap: wrap; 
            gap: 30px; 
            justify-content: flex-start;
            padding: 10px;
            margin-bottom: 45px;
        }

        .event-item {
            width: 48%; 
            display: flex;
            align-items: center; 
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            padding: 10px;
            text-align: left; 
        }

        .event-image {
            width: 40%; 
            height: 150px; 
            object-fit: cover;
            border-radius: 10px;
            margin-right: 20px; 
        }

        .event-details {
            font-size: 14px; 
            color: #5a3225;
            width: 60%; 
        }

        .btn-book {
            background-color: #bfa094;
            color: white;
            padding: 8px 15px; 
            font-size: 14px; 
            border: none;
            border-radius: 20px;
            text-align: center;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-book:hover {
            background-color: #a48075;
        }

        .form-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 50px;
        }

        .form-container input, .form-container textarea, .form-container select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }

        .form-container button {
            background-color: #bfa094;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .form-container button:hover {
            background-color: #a48075;
        }
        .additional-fields label {
    display: flex;
    justify-content: space-between;
    margin-bottom: 10px;
    align-items: center;
}

.additional-fields input[type="checkbox"] {
    order: 1; 
}

    </style>

</head>
<body>

<div class="container">
    <h2 class="section-title">Add Event Package</h2>
    <div class="form-container">
        <form action="/add-package" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Package Name" required><br>
            <textarea name="description" placeholder="Description" required></textarea><br>
            <input type="number" name="price" placeholder="Price" required><br>

           
            <select name="party_type" id="party_type" onchange="toggleFields()" required>
                <option value="business">Business</option>
                <option value="conference">Conference</option>
                <option value="gala">Gala</option>
                <option value="kids">Kids</option>
                <option value="luxury">Luxury</option>
                <option value="classic">Classic</option>
                <option value="themed">Themed</option>
            </select><br>

            <div id="corporateFields" class="additional-fields" style="display:none;">
    <label><span>Photography</span><input type="checkbox" name="photography" value="1"></label><br>
    <label><span>Corporate Catering</span><input type="checkbox" name="corporate_catering" value="1"></label><br>
    <label><span>Extra Decorations</span><input type="checkbox" name="extra_decorations" value="1"></label><br>
</div>

<div id="birthdayFields" class="additional-fields" style="display:none;">
    <label><span>Photography</span><input type="checkbox" name="photography" value="1"></label><br>
    <label><span>Birthday Cake</span><input type="checkbox" name="birthday_cake" value="1"></label><br>
    <label><span>Extra Decorations</span><input type="checkbox" name="extra_decorations" value="1"></label><br>
</div>


            <input type="text" name="image_url" placeholder="Image URL" required><br>

           
            <textarea name="timeline" placeholder="Event Timeline" required></textarea><br>
            <textarea name="detailed_info" placeholder="Detailed Information" required></textarea><br>

            <button type="submit">Add Package</button>
        </form>
    </div>



<h2 class="section-title">Corporate Packages</h2>
    <div class="event-container">
        @foreach ($corporatePackages as $package)
            <div class="event-item">
                <img src="{{ asset($package->image_url) }}" alt="{{ $package->name }}" class="event-image">
                <div class="event-details">
                    <h3>{{ $package->name }}</h3>
                    <p>{{ $package->description }}</p>
                    <p><strong>${{ $package->price }}</strong></p>
                    <form action="/delete-package/{{ $package->id }}?type=corporate" method="POST">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn-book">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
    
    <h2 class="section-title">Birthday Packages</h2>
    <div class="event-container">
        @foreach ($birthdayPackages as $package)
            <div class="event-item">
                <img src="{{ asset($package->image_url) }}" alt="{{ $package->name }}" class="event-image">
                <div class="event-details">
                    <h3>{{ $package->name }}</h3>
                    <p>{{ $package->description }}</p>
                    <p><strong>${{ $package->price }}</strong></p>
                    <form action="/delete-package/{{ $package->id }}?type=birthday" method="POST">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn-book">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</div>
</div>

<script>
    function toggleFields() {
        var party_type = document.getElementById('party_type').value;
        if (party_type === 'business' || party_type === 'conference' || party_type === 'gala') {
            document.getElementById('corporateFields').style.display = 'block';
            document.getElementById('birthdayFields').style.display = 'none';
        } else if (party_type === 'kids' || party_type === 'luxury' || party_type === 'classic' || party_type === 'themed') {
            document.getElementById('birthdayFields').style.display = 'block';
            document.getElementById('corporateFields').style.display = 'none';
        }
    }
</script>

</body>
</html>
