<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Dealership</title>
    <!-- Add your CSS links here -->

    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Assuming you have app.css for styling -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

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


    <main>
        @yield('content')
    </main>

    <!-- Add your JavaScript links here -->
</body>
</html>
