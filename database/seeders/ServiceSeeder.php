<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = [
            [
                'name' => 'Regular 87',
                'service_slug' => 'regular-87',
                'price_per_gal' => 3.50,
                'status' => 1,
                'icon' => 'fuel-pump',
            ],
            [
                'name' => 'Mid-grade 89',
                'service_slug' => 'mid-grade-89',
                'price_per_gal' => 3.80,
                'status' => 1,
                'icon' => 'fuel-pump',
            ],
            [
                'name' => 'Premium 93',
                'service_slug' => 'premium-93',
                'price_per_gal' => 4.20,
                'status' => 1,
                'icon' => 'fuel-pump',
            ],
            [
                'name' => 'Diesel',
                'service_slug' => 'diesel',
                'price_per_gal' => 4.00,
                'status' => 1,
                'icon' => 'fuel-pump',
            ]
        ];

        foreach ($services as $service) {
            Service::updateOrCreate(['service_slug' => $service['service_slug']], $service);
        }
    }
}
