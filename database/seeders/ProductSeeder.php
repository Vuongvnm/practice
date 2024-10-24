<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'name' => 'Sản phẩm 1',
            'description' => 'Mô tả sản phẩm 1',
            'price' => 100.00,
            'quantity' => 10
        ]);
        Product::create(['name' => 'Sản phẩm 2', 'description' => 'Mô tả sản phẩm 2', 'price' => 200.50, 'quantity' => 5]);
        Product::create(['name' => 'Sản phẩm 3', 'description' => 'Mô tả sản phẩm 3', 'price' => 150.75, 'quantity' => 8]);
        Product::create(['name' => 'Sản phẩm 4', 'description' => 'Mô tả sản phẩm 4', 'price' => 300.99, 'quantity' => 2]);
        Product::create(['name' => 'Sản phẩm 5', 'description' => 'Mô tả sản phẩm 5', 'price' => 50.25, 'quantity' => 20]);
    }
}
