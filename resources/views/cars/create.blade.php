@extends('layouts.app')

@section('content')
<h1>Add New Car</h1>
<form action="{{ route('cars.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="car_name">Car Name</label>
        <input type="text" name="car_name" class="form-control">
        @error('car_name')
            <small class="text-danger">{{ 'Enter Name' }}</small>
        @enderror
    </div>
    <div class="form-group">
        <label for="car_color">Car Color</label>
        <input type="text" name="car_color" class="form-control">
        @error('car_color')
            <small class="text-danger">{{ 'Enter Color' }}</small>
        @enderror
    </div>
    <div class="form-group">
        <label for="car_price">Car Price</label>
        <input type="number" name="car_price" class="form-control">
        @error('car_price')
            <small class="text-danger">{{ 'Enter Price' }}</small>
        @enderror
    </div>
    <div class="form-group">
        <label for="car_description">Car Description</label>
        <input type="text" name="car_description" class="form-control">
        @error('car_description')
            <small class="text-danger">{{ 'Enter Description' }}</small>
        @enderror
    </div>
    <button type="submit" class="btn btn-success">Add Car</button>
</form>
@endsection
