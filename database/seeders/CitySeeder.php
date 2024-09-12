<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\City;
class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::create(['name' => 'Los Angeles', 'state_id' => 1]);
        City::create(['name' => 'San Francisco', 'state_id' => 1]);
        City::create(['name' => 'San Diego', 'state_id' => 1]);
        City::create(['name' => 'Houston', 'state_id' => 2]);
        City::create(['name' => 'Dallas', 'state_id' => 2]);
        City::create(['name' => 'Austin', 'state_id' => 2]);
        City::create(['name' => 'Mumbai', 'state_id' => 3]);
        City::create(['name' => 'Pune', 'state_id' => 3]);
        City::create(['name' => 'Nagpur', 'state_id' => 3]);
        City::create(['name' => 'Bangalore', 'state_id' => 4]);
        City::create(['name' => 'Mysore', 'state_id' => 4]);
        City::create(['name' => 'Mangalore', 'state_id' => 4]);
        City::create(['name' => 'Toronto', 'state_id' => 5]);
        City::create(['name' => 'Ottawa', 'state_id' => 5]);
        City::create(['name' => 'Mississauga', 'state_id' => 5]);
        City::create(['name' => 'Vancouver', 'state_id' => 6]);
        City::create(['name' => 'Victoria', 'state_id' => 6]);
        City::create(['name' => 'Surrey', 'state_id' => 6]);
        City::create(['name' => 'Sydney', 'state_id' => 7]);
        City::create(['name' => 'Newcastle', 'state_id' => 7]);
        City::create(['name' => 'Wollongong', 'state_id' => 7]);
        City::create(['name' => 'Melbourne', 'state_id' => 8]);
        City::create(['name' => 'Geelong', 'state_id' => 8]);
        City::create(['name' => 'Ballarat', 'state_id' => 8]);
    }
}
