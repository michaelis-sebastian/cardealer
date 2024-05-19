<!-- resources/views/vehicles/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Vehicles List</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" />
</head>
<body>
    <div class="container">
        <h1 class="mt-5">List of Vehicles</h1>

        <!-- Filter Form -->
        <form method="GET" action="{{ url('/vehicles') }}" class="mb-5">
            <div class="row">
                <div class="col-md-3">
                    <label for="brand_id">Brand:</label>
                    <select name="brand_id" id="brand_id" class="form-control">
                        <option value="">Select Brand</option>
                        @foreach($brands as $brand)
                            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="min_price">Min Price:</label>
                    <input type="number" name="min_price" id="min_price" class="form-control" placeholder="Min Price">
                </div>
                <div class="col-md-3">
                    <label for="max_price">Max Price:</label>
                    <input type="number" name="max_price" id="max_price" class="form-control" placeholder="Max Price">
                </div>
                <div class="col-md-3 align-self-end">
                    <button type="submit" class="btn btn-primary">Filter</button>
                </div>
            </div>
        </form>

        <!-- Vehicles Table -->
        <table class="table table-striped table-hover table-bordered">
            <thead class="thead-dark">
                <tr>
                    <!-- <th>ID</th> -->
                    <th>Model</th>
                    <th>Brand</th>
                    <th>Year</th>
                    <th>Color</th>
                    <th>Price</th>
                    <th>Image</th>
                    <!-- <th>Created At</th>
                    <th>Updated At</th> -->
                </tr>
            </thead>
            <tbody>
                @foreach($vehicles as $vehicle)
                <tr>
                    <!-- <td>{{ $vehicle->id }}</td> -->
                    <td>{{ $vehicle->model->name }}</td>
                    <td>{{ $vehicle->model->brand->name }}</td>
                    <td>{{ $vehicle->year }}</td>
                    <td>{{ $vehicle->color }}</td>
                    <td>$ {{ $vehicle->price }}</td>
                    <td><img src="{{ $vehicle->image_link }}" alt="{{ $vehicle->model->name }}" width="100"></td>
                    <!-- <td>{{ $vehicle->created_at }}</td>
                    <td>{{ $vehicle->updated_at }}</td> -->
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
