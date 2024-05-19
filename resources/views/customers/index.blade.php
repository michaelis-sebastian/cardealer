@extends('layouts.app')

@section('content')

    <div class="container">
        <h1 class="mt-5">List of Customers</h1>
        <table class="table table-striped table-hover table-bordered">
            <thead  class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <!-- <th>Created At</th>
                    <th>Updated At</th> -->
                </tr>
            </thead>
            <tbody>
                @foreach($customers as $customer)
                <tr>
                    <td>{{ $customer->id }}</td>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->phone }}</td>
                    <td>{{ $customer->address }}</td>
                    <!-- <td>{{ $customer->created_at }}</td>
                    <td>{{ $customer->updated_at }}</td> -->
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
