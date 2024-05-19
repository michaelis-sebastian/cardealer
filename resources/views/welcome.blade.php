<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Dealership</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        /* Add custom CSS styles here */
        .jumbotron {
            /* background-color: #f8f9fa;  */
            /* padding: 100px 0;  */
            text-align: center;
        }
        .display-4 {
            color: #343a40;
            font-weight: bold;
        }
        .lead {
            color: #6c757d; /* Set text color */
        }
        .btn-primary {
            background-color: #007bff; /* Set button background color */
            border-color: #007bff; /* Set button border color */
        }
        /* Add animation effects */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        .animated {
            animation: fadeIn 1s;
        }
        /* body {
            background: linear-gradient(to right, #ff9966, #ff5e62);
        } */
        body {
            background-image: url('https://images.pexels.com/photos/733745/pexels-photo-733745.jpeg?cs=srgb&dl=pexels-cesarperez209-733745.jpg&fm=jpg');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="http://127.0.0.1:8000">Car Dealership</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="brands">Brands</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="models">Models</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="customers">Customers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="dealers">Dealers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="vehicles">Vehicles</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="solds">Solds</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="jumbotron animated p-5 m-5" style="background-color: transparent;">
        <h1 class="display-4" style="color: white;">Welcome to Our Car Dealership</h1>
        <p class="lead" style="color: white;">Explore our wide range of vehicles at great prices.</p>
        <a class="btn btn-primary btn-lg" href="vehicles" role="button">View Inventory</a>
    </div>



    <!-- <div class="container mt-5"> -->
        <!-- <h2>Top Performing Dealer</h2> -->
        <?php
            use Illuminate\Support\Facades\DB;

            $topDealer = DB::table('dealers')
                            ->join('solds', 'dealers.id', '=', 'solds.dealer_id')
                            ->select('dealers.*', DB::raw('COUNT(solds.id) as total_sold'))
                            ->groupBy('dealers.id')
                            ->orderByDesc('total_sold')
                            ->first();
        ?>
        @if($topDealer)
            <div class="card" style="background-color: transparent; text-align:right;">
                <div class="card-body">
                    <h3 class="card-text" style="color: white;">Vehicles Sold: {{ $topDealer->total_sold }}</h3>
                    <h2 class="card-title" style="color: white;">{{ $topDealer->name }}</h2>
                    <!-- Add more dealer details here as needed -->
                </div>
            </div>
        @else
            <p>No top-performing dealer found.</p>
        @endif
    <!-- </div> -->



    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
