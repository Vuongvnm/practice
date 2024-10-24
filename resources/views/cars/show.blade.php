@extends('layouts.app')

@section('content')
<h1>Car Details</h1>
<p><strong>Name:</strong> {{ $car->car_name }}</p>
<p><strong>Color:</strong> {{ $car->car_color }}</p>
<p><strong>Price:</strong> {{ $car->car_price }}</p>
<p><strong>Description:</strong> {{ $car->car_description }}</p>
<a href="{{ route('cars.index') }}" class="btn btn-primary">Back to List</a>
@endsection
