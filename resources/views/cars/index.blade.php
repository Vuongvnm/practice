@extends('layouts.app')

@section('content')
<h1>Car List</h1>
@if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
<a href="{{ route('cars.create') }}" class="btn btn-primary">Add New Car</a>

<table class="table">
    <thead>
        <tr>
            <th>Car Name</th>
            <th>Car Color</th>
            <th>Car Price</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($car as $car)
        <tr>
            <td>{{ $car->car_name }}</td>
            <td>{{ $car->car_color }}</td>
            <td>{{ $car->car_price }}</td>
            <td>
                <a href="{{ route('cars.edit', $car->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('cars.destroy', $car->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this car?');">Delete</button>
                    <a href="{{ route('cars.show', $car->id) }}" class="btn btn-warning">Show</a>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
