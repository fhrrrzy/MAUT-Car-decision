<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Car;
use Faker\Factory as Faker;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            Car::create([
                'uuid' => $faker->uuid,
                'name' => $faker->company . ' ' . $faker->randomElement(['Sedan', 'SUV', 'Hatchback']),
                'price' => $faker->numberBetween(5000, 50000),
                'age' => $faker->numberBetween(1, 10),
                'kilometer_used' => $faker->numberBetween(10000, 100000),
                'condition' => $faker->numberBetween(1, 10),
                'fuel_efficiency' => $faker->numberBetween(10, 20),
                'fuel_type' => $faker->randomElement(['bensin', 'diesel', 'elektrik']),
                'safety_measurement' => $faker->numberBetween(5, 10),
                'warranty_showroom' => $faker->dateTimeBetween('-1 year', 'now')->format('Y-m-d'),
                'warranty_store' => $faker->dateTimeBetween('now', '+1 year')->format('Y-m-d'),
                'type' => $faker->randomElement(['manual', 'auto', 'semi-auto']),
                'image' => 'default.jpg', // or $faker->imageUrl() for actual images
            ]);
        }
    }
}
