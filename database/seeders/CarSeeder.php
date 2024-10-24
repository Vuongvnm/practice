<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Car::create([
            'car_name' => 'Car1',
            'car_color' => 'Red',
            'car_price' => 1000,
            'car_description' => 'Car Des',
        ]);

        Car::create([
            'car_name' => 'Car1',
            'car_color' => 'Red',
            'car_price' => 1000,
            'car_description' => 'Car Des',
        ]);

        Car::create([
            'car_name' => 'Car1',
            'car_color' => 'Red',
            'car_price' => 1000,
            'car_description' => 'Car Des',
        ]);

        Car::create([
            'car_name' => 'Car1',
            'car_color' => 'Red',
            'car_price' => 1000,
            'car_description' => 'Car Des',
        ]);

        Car::create([
            'car_name' => 'Car1',
            'car_color' => 'Red',
            'car_price' => 1000,
            'car_description' => 'Car Des',
        ]);
    }
}
