@extends('layouts.product')

@section('content')
<h1>Thêm sản phẩm mới</h1>
        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Tên sản phẩm</label>
                <input type="text" name="name" class="form-control">
                @error('name')
                    <small class="text-danger">Nhập thông tin hợp lệ</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="description">Mô tả</label>
                <textarea name="description" class="form-control"></textarea>
                @error('description')
                    <small class="text-danger">Nhập thông tin hợp lệ</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="price">Giá</label>
                <input type="number" name="price" class="form-control" step="0.01">
                @error('price')
                    <small class="text-danger">Nhập thông tin hợp lệ</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="quantity">Số lượng</label>
                <input type="number" name="quantity" class="form-control">
                @error('quantity')
                    <small class="text-danger">Nhập thông tin hợp lệ</small>
                @enderror
            </div>
            <button type="submit" class="btn btn-success">Lưu</button>
            <a href="{{ route('products.index') }}" class="btn btn-secondary">Quay lại</a>
        </form>
@endsection
