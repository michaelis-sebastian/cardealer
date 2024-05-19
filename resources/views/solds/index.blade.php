@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-4">Solds</h1>
        <div class="row">
            @foreach($solds as $sold)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <img class="card-img-top" src="{{ $sold->vehicle->image_link }}" alt="{{ $sold->vehicle->model->name }}" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h4 class="card-title">{{ $sold->vehicle->model->name }} ({{ $sold->vehicle->year }})</h4>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $sold->vehicle->model->brand->name }}</h6>
                        <p class="card-text">Color: {{ $sold->vehicle->color }}</p>
                        <p class="card-text">Price: ${{ $sold->sold_price }}</p>
                        <p class="card-text">Sold Date: {{ $sold->sold_date }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
