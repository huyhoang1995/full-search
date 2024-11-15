<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Country;

class CountrySeeder extends Seeder
{
    public function run()
    {
        $countries = [
            ['name' => 'Vietnam', 'capital' => 'Hanoi', 'continent' => 'Asia'],
            ['name' => 'United States', 'capital' => 'Washington, D.C.', 'continent' => 'North America'],
            ['name' => 'Brazil', 'capital' => 'Brasília', 'continent' => 'South America'],
            ['name' => 'France', 'capital' => 'Paris', 'continent' => 'Europe'],
            ['name' => 'China', 'capital' => 'Beijing', 'continent' => 'Asia'],
            ['name' => 'India', 'capital' => 'New Delhi', 'continent' => 'Asia'],
            ['name' => 'Russia', 'capital' => 'Moscow', 'continent' => 'Europe'],
            ['name' => 'Japan', 'capital' => 'Tokyo', 'continent' => 'Asia'],
            ['name' => 'Canada', 'capital' => 'Ottawa', 'continent' => 'North America'],
            ['name' => 'Mexico', 'capital' => 'Mexico City', 'continent' => 'North America'],
            ['name' => 'Germany', 'capital' => 'Berlin', 'continent' => 'Europe'],
            ['name' => 'United Kingdom', 'capital' => 'London', 'continent' => 'Europe'],
            ['name' => 'Italy', 'capital' => 'Rome', 'continent' => 'Europe'],
            ['name' => 'Australia', 'capital' => 'Canberra', 'continent' => 'Oceania'],
            ['name' => 'South Korea', 'capital' => 'Seoul', 'continent' => 'Asia'],
            ['name' => 'Argentina', 'capital' => 'Buenos Aires', 'continent' => 'South America'],
            ['name' => 'Egypt', 'capital' => 'Cairo', 'continent' => 'Africa'],
            ['name' => 'Nigeria', 'capital' => 'Abuja', 'continent' => 'Africa'],
            ['name' => 'South Africa', 'capital' => 'Pretoria', 'continent' => 'Africa'],
            ['name' => 'Saudi Arabia', 'capital' => 'Riyadh', 'continent' => 'Asia'],
            ['name' => 'Turkey', 'capital' => 'Ankara', 'continent' => 'Asia'],
            ['name' => 'Spain', 'capital' => 'Madrid', 'continent' => 'Europe'],
            ['name' => 'Pakistan', 'capital' => 'Islamabad', 'continent' => 'Asia'],
            ['name' => 'Indonesia', 'capital' => 'Jakarta', 'continent' => 'Asia'],
            ['name' => 'Nigeria', 'capital' => 'Abuja', 'continent' => 'Africa'],
            ['name' => 'Thailand', 'capital' => 'Bangkok', 'continent' => 'Asia'],
            ['name' => 'Poland', 'capital' => 'Warsaw', 'continent' => 'Europe'],
            ['name' => 'Ukraine', 'capital' => 'Kyiv', 'continent' => 'Europe'],
            ['name' => 'Romania', 'capital' => 'Bucharest', 'continent' => 'Europe'],
            ['name' => 'Peru', 'capital' => 'Lima', 'continent' => 'South America'],
            ['name' => 'Colombia', 'capital' => 'Bogotá', 'continent' => 'South America'],
            ['name' => 'Kenya', 'capital' => 'Nairobi', 'continent' => 'Africa'],
            ['name' => 'Chile', 'capital' => 'Santiago', 'continent' => 'South America'],
            ['name' => 'Venezuela', 'capital' => 'Caracas', 'continent' => 'South America'],
            ['name' => 'Belgium', 'capital' => 'Brussels', 'continent' => 'Europe'],
            ['name' => 'Sweden', 'capital' => 'Stockholm', 'continent' => 'Europe'],
            ['name' => 'Norway', 'capital' => 'Oslo', 'continent' => 'Europe'],
            ['name' => 'Denmark', 'capital' => 'Copenhagen', 'continent' => 'Europe'],
            ['name' => 'Finland', 'capital' => 'Helsinki', 'continent' => 'Europe'],
            ['name' => 'New Zealand', 'capital' => 'Wellington', 'continent' => 'Oceania'],
            ['name' => 'Malaysia', 'capital' => 'Kuala Lumpur', 'continent' => 'Asia'],
            ['name' => 'Singapore', 'capital' => 'Singapore', 'continent' => 'Asia'],
            ['name' => 'Portugal', 'capital' => 'Lisbon', 'continent' => 'Europe'],
            ['name' => 'Czech Republic', 'capital' => 'Prague', 'continent' => 'Europe'],
            ['name' => 'Austria', 'capital' => 'Vienna', 'continent' => 'Europe'],
            ['name' => 'Switzerland', 'capital' => 'Bern', 'continent' => 'Europe'],
            ['name' => 'Israel', 'capital' => 'Jerusalem', 'continent' => 'Asia'],
            ['name' => 'Chile', 'capital' => 'Santiago', 'continent' => 'South America'],
            ['name' => 'Costa Rica', 'capital' => 'San José', 'continent' => 'North America'],
            ['name' => 'Bangladesh', 'capital' => 'Dhaka', 'continent' => 'Asia'],
            ['name' => 'Philippines', 'capital' => 'Manila', 'continent' => 'Asia'],
        ];

        foreach ($countries as $country) {
            Country::create($country);
        }
    }
}
