<!-- resources/views/models/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Models List</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" />
</head>
<body>
    <div class="container">
        <h1 class="mt-5">List of Models</h1>
        <table class="table table-striped table-hover table-bordered">
            <thead  class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Brand</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                </tr>
            </thead>
            <tbody>
                @foreach($models as $model)
                <tr>
                    <td>{{ $model->id }}</td>
                    <td>{{ $model->name }}</td>
                    <td>{{ $model->brand->name }}</td> <!-- Assuming your CarModel has a relationship with Brand -->
                    <td>{{ $model->created_at }}</td>
                    <td>{{ $model->updated_at }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
