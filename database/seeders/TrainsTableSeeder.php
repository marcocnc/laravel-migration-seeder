<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // Random companies
        $companies = ['Italo', 'Trenitalia', 'Frecciarossa', 'FlixTrain', 'SNCF', 'OUIGO', 'Deutche Bahn', 'SBB', 'OBB', 'WestBahn', 'iryo', 'Renfe', 'DSB', 'SNCB'];

        for ($i = 0; $i < 10 ; $i ++) {
            $new_train = new Train();
            $new_train->company = $faker->randomElement($companies);
            $new_train->departure_station = $faker->word();
            $new_train->arrival_station = $faker->word();
            $new_train->departure_time = $faker->time();
            $new_train->arrival_time = $faker->time();
            $new_train->code = $faker->randomNumber(5);
            $new_train->carriages = $faker->randomDigitNotNull();
            $new_train->in_time = $faker->boolean();
            $new_train->cancelled = $faker->boolean();

            $new_train->save();
        }

    }
}
