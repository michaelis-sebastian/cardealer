<!-- resources/views/dealers/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Dealers List</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" />
</head>
<body>
    <div class="container">
        <h1 class="mt-5">List of Dealers</h1>
        <table class="table table-striped table-hover table-bordered">
            <thead  class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dealers as $dealer)
                <tr>
                    <td>{{ $dealer->id }}</td>
                    <td>{{ $dealer->name }}</td>
                    <td>{{ $dealer->email }}</td>
                    <td>{{ $dealer->phone }}</td>
                    <td>{{ $dealer->address }}</td>
                    <td>{{ $dealer->created_at }}</td>
                    <td>{{ $dealer->updated_at }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>