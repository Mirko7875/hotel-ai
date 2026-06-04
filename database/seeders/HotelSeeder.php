<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
           \App\Models\Hotel::create([
        'name' => 'Grand Palace Hotel',
        'city' => 'Kuala Lumpur',
        'rating' => 5,
        'price' => 450.00,
        'description' => 'Luxury hotel in city center'
    ]);

    \App\Models\Hotel::create([
        'name' => 'Sunrise Resort',
        'city' => 'Langkawi',
        'rating' => 4,
        'price' => 300.00,
        'description' => 'Beachfront resort'
    ]);

    \App\Models\Hotel::create([
        'name' => 'Mountain View Hotel',
        'city' => 'Cameron Highlands',
        'rating' => 4,
        'price' => 220.00,
        'description' => 'Cool weather and mountain scenery'
    ]);
    }
}
