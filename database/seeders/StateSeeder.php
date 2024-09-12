<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\State;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
        public function run()
    {
        State::create(['name' => 'California', 'country_id' => 1]);
        State::create(['name' => 'Texas', 'country_id' => 1]);
        State::create(['name' => 'Maharashtra', 'country_id' => 2]);
        State::create(['name' => 'Karnataka', 'country_id' => 2]);
        State::create(['name' => 'Ontario', 'country_id' => 3]);
        State::create(['name' => 'British Columbia', 'country_id' => 3]);
        State::create(['name' => 'New South Wales', 'country_id' => 4]);
        State::create(['name' => 'Victoria', 'country_id' => 4]);
        State::create(['name' => 'England', 'country_id' => 5]);
        State::create(['name' => 'Scotland', 'country_id' => 5]);
        State::create(['name' => 'Bavaria', 'country_id' => 6]);
        State::create(['name' => 'Berlin', 'country_id' => 6]);
        State::create(['name' => 'Île-de-France', 'country_id' => 7]);
        State::create(['name' => 'Provence-Alpes-Côte d\'Azur', 'country_id' => 7]);
        State::create(['name' => 'Tokyo', 'country_id' => 8]);
        State::create(['name' => 'Osaka', 'country_id' => 8]);
    }
}
