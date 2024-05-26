<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Car;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $cars = [
            [
                'uuid' => \Illuminate\Support\Str::uuid(),
                'name' => 'Wisozxfahey and Wisoky sedan',
                'price' => 412158123,
                'release_date' => '2021-11-21',
                'first_registration_date' => '2022-07-02',
                'kilometer_used' => 55059,
                'fuel_efficiency' => 16,
                'fuel_type' => 'bensin',
                'warranty_showroom' => '2025-08-28',
                'type' => 'manual',
                'image' => 'default.png'
            ],
            [
                'uuid' => \Illuminate\Support\Str::uuid(),
                'name' => 'Honda Jazz',
                'price' => 180000000,
                'release_date' => '2017-03-10',
                'first_registration_date' => '2018-03-15',
                'kilometer_used' => 50220,
                'fuel_efficiency' => 14,
                'fuel_type' => 'bensin',
                'warranty_showroom' => '2026-05-01',
                'type' => 'auto',
                'image' => 'default.png'
            ],
            [
                'uuid' => \Illuminate\Support\Str::uuid(),
                'name' => 'Suzuki Ertiga',
                'price' => 130000000,
                'release_date' => '2014-04-05',
                'first_registration_date' => '2015-04-10',
                'kilometer_used' => 45115,
                'fuel_efficiency' => 12,
                'fuel_type' => 'bensin',
                'warranty_showroom' => '2024-12-01',
                'type' => 'auto',
                'image' => 'default.png'
            ],
            [
                'uuid' => \Illuminate\Support\Str::uuid(),
                'name' => 'Mitsubishi Pajero',
                'price' => 300000000,
                'release_date' => '2019-07-20',
                'first_registration_date' => '2019-07-25',
                'kilometer_used' => 70300,
                'fuel_efficiency' => 10,
                'fuel_type' => 'diesel',
                'warranty_showroom' => '2025-07-01',
                'type' => 'manual',
                'image' => 'default.png'
            ],
            [
                'uuid' => \Illuminate\Support\Str::uuid(),
                'name' => 'Daihatsu Xenia',
                'price' => 120000000,
                'release_date' => '2015-01-15',
                'first_registration_date' => '2016-01-20',
                'kilometer_used' => 43725,
                'fuel_efficiency' => 11,
                'fuel_type' => 'bensin',
                'warranty_showroom' => '2024-09-01',
                'type' => 'auto',
                'image' => 'default.png'
            ],
            [
                'uuid' => \Illuminate\Support\Str::uuid(),
                'name' => 'Nissan March',
                'price' => 100000000,
                'release_date' => '2013-02-10',
                'first_registration_date' => '2014-02-15',
                'kilometer_used' => 60400,
                'fuel_efficiency' => 15,
                'fuel_type' => 'bensin',
                'warranty_showroom' => '2025-03-01',
                'type' => 'manual',
                'image' => 'default.png'
            ],
            [
                'uuid' => \Illuminate\Support\Str::uuid(),
                'name' => 'Ford Fiesta',
                'price' => 140000000,
                'release_date' => '2014-02-05',
                'first_registration_date' => '2015-05-10',
                'kilometer_used' => 80320,
                'fuel_efficiency' => 13,
                'fuel_type' => 'bensin',
                'warranty_showroom' => '2026-01-01',
                'type' => 'manual',
                'image' => 'default.png'
            ],
            [
                'uuid' => \Illuminate\Support\Str::uuid(),
                'name' => 'Mazda 2',
                'price' => 160000000,
                'release_date' => '2016-08-10',
                'first_registration_date' => '2016-08-15',
                'kilometer_used' => 55000,
                'fuel_efficiency' => 14,
                'fuel_type' => 'bensin',
                'warranty_showroom' => '2025-04-01',
                'type' => 'auto',
                'image' => 'default.png'
            ],
            [
                'uuid' => \Illuminate\Support\Str::uuid(),
                'name' => 'Kia Rio',
                'price' => 110000000,
                'release_date' => '2012-12-15',
                'first_registration_date' => '2012-12-20',
                'kilometer_used' => 35040,
                'fuel_efficiency' => 12,
                'fuel_type' => 'bensin',
                'warranty_showroom' => '2026-02-01',
                'type' => 'manual',
                'image' => 'default.png'
            ],
            [
                'uuid' => \Illuminate\Support\Str::uuid(),
                'name' => 'Hyundai i10',
                'price' => 90000000,
                'release_date' => '2014-01-20',
                'first_registration_date' => '2015-01-25',
                'kilometer_used' => 90625,
                'fuel_efficiency' => 16,
                'fuel_type' => 'bensin',
                'warranty_showroom' => '2025-01-01',
                'type' => 'auto',
                'image' => 'default.png'
            ],
        ];

        foreach ($cars as $car) {
            Car::create($car);
        }
    }
}
