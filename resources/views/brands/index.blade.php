@extends('layouts.app')

@section('content')
    <!-- <h1>All Brands</h1> -->
    <!-- Your Brands listing goes here -->


    <div class="container mt-5">
        <h1 class="mb-4">List of Brands</h1>
        <table class="table table-striped table-hover table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <!-- <th scope="col">Created At</th>
                    <th scope="col">Updated At</th> -->
                </tr>
            </thead>
            <tbody>
                @foreach ($brands as $brand)
                    <tr>
                        <td>{{ $brand->id }}</td>
                        <td>{{ $brand->name }}</td>
                        <!-- <td>{{ $brand->created_at }}</td>
                        <td>{{ $brand->updated_at }}</td> -->
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

@endsection
