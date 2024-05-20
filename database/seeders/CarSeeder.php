<?php

namespace Database\Seeders;

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

        foreach (range(1, 20) as $index) {
            $releaseDate = $faker->dateTimeBetween('-10 years', 'now');
            $registrationDate = $faker->dateTimeBetween($releaseDate, 'now');

            Car::create([
                'uuid' => $faker->uuid,
                'name' => $faker->company . ' ' . $faker->randomElement(['Sedan', 'SUV', 'Hatchback']),
                'price' => $faker->numberBetween(50000000, 900000000),
                'release_date' => $releaseDate->format('Y-m-d'),
                'first_registration_date' => $registrationDate->format('Y-m-d'),
                'kilometer_used' => $faker->numberBetween(10000, 100000),
                'fuel_efficiency' => $faker->numberBetween(10, 20),
                'fuel_type' => $faker->randomElement(['bensin', 'diesel', 'elektrik']),
                'warranty_showroom' => $faker->dateTimeBetween('-1 year', '2 year')->format('Y-m-d'),
                'type' => $faker->randomElement(['manual', 'auto', 'semiauto']),
                'image' => 'default.png', // or $faker->imageUrl() for actual images
            ]);
        }
    }
}
