<?php

use Illuminate\Database\Seeder;

use Faker\Generator as Faker;
use App\Trip;

class TripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i< 25; $i++) {
            $sample_trip = new Trip();
            $sample_trip->from = $faker->city();
            $sample_trip->to = $faker->city();
            $sample_trip->maxGuests = $faker->randomNumber(2, false); 
            $sample_trip->minGuests = $faker->randomNumber(2, false); 
            $sample_trip->description = $faker->paragraph();
            $sample_trip->start = $faker->dateTime();
            $sample_trip->end = $faker->dateTime();
            $sample_trip->save();
        }
    }
}
