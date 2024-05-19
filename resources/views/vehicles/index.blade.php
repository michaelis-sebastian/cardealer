
@extends('layouts.app')

@section('content')

    <div class="container">
        <style>
            .vehicle-card {
                margin-bottom: 30px;
            }
            .vehicle-card img {
                height: 200px; /* Set the desired height for the images */
                width: 100%; /* Ensure the image takes the full width of the card */
                object-fit: cover; /* Cover the area without distorting the image */
            }
        </style>
        <h1 class="mt-5">List of Vehicles</h1>

        <!-- Filter Form -->
        <form method="GET" action="{{ url('/vehicles') }}" class="mb-5">
            <div class="row">
                <div class="col-md-3">
                    <label for="brand_id">Brand:</label>
                    <select name="brand_id" id="brand_id" class="form-control">
                        <option value="">Select Brand</option>
                        @foreach($brands as $brand)
                            <option value="{{ $brand->id }}" {{ request('brand_id') == $brand->id ? 'selected' : '' }}>{{ $brand->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="min_price">Min Price:</label>
                    <input type="number" name="min_price" id="min_price" class="form-control" placeholder="Min Price" value="{{ request('min_price') }}">
                </div>
                <div class="col-md-3">
                    <label for="max_price">Max Price:</label>
                    <input type="number" name="max_price" id="max_price" class="form-control" placeholder="Max Price" value="{{ request('max_price') }}">
                </div>
                <div class="col-md-3 align-self-end">
                    <button type="submit" class="btn btn-primary">Filter</button>
                </div>
            </div>
        </form>

        <!-- Sorting Links -->
        <div class="mb-3">
            <a href="{{ url('/vehicles') }}?{{ http_build_query(request()->except('sort_order')) }}&sort_order=asc" class="btn btn-secondary">Sort by Price: Low to High</a>
            <a href="{{ url('/vehicles') }}?{{ http_build_query(request()->except('sort_order')) }}&sort_order=desc" class="btn btn-secondary">Sort by Price: High to Low</a>
        </div>

        <!-- Vehicles Grid -->
        <div class="row">
            @foreach($vehicles as $vehicle)
            <div class="col-md-4 vehicle-card">
                <div class="card">
                    <img src="{{ $vehicle->image_link }}" alt="{{ $vehicle->model->name }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{ $vehicle->model->name }} ({{ $vehicle->year }})</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $vehicle->model->brand->name }}</h6>
                        <p class="card-text">Color: {{ $vehicle->color }}</p>
                        <p class="card-text">Price: ${{ number_format($vehicle->price, 2) }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
@endsection
