@extends('layouts.product')

@section('content')
<h1>Sửa sản phẩm</h1>
        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Tên sản phẩm</label>
                <input type="text" name="name" class="form-control" value="{{ old('name', $product->name) }}">
                @error('name')
                    <small class="text-danger">Nhập thông tin hợp lệ</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="description">Mô tả</label>
                <textarea name="description" class="form-control">{{ old('description', $product->description) }}</textarea>
                @error('description')
                    <small class="text-danger">Nhập thông tin hợp lệ</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="price">Giá</label>
                <input type="number" name="price" class="form-control" value="{{ old('price', $product->price) }}" step="0.01">
                @error('price')
                    <small class="text-danger">Nhập thông tin hợp lệ</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="quantity">Số lượng</label>
                <input type="number" name="quantity" class="form-control" value="{{ old('quantity', $product->quantity) }}">
                @error('quantity')
                    <small class="text-danger">Nhập thông tin hợp lệ</small>
                @enderror
            </div>
            <button type="submit" class="btn btn-success">Cập nhật</button>
            <a href="{{ route('products.index') }}" class="btn btn-secondary">Quay lại</a>
        </form>
@endsection
