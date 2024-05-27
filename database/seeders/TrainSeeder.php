<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        $companies = ['Italo', 'Trenitalia', 'Freccia rossa', 'Trenord'];

        for ($i = 0; $i < 100; $i++) {

            // creare l'istanza del model Train
            $new_train = new Train();

            // popolare le proprietà dell'istanza 
            $new_train->company = $faker->randomElement($companies);
            $new_train->departure_station = $faker->city();
            $new_train->arrival_station = $faker->city();
            $new_train->departure_time = $faker->dateTime();
            $new_train->arrival_time = $faker->dateTime();
            $new_train->train_code = $faker->bothify('??-######');
            $new_train->wagons_number = $faker->numberBetween(0, 20);
            $new_train->on_time = $faker->boolean();
            $new_train->cancelled = $faker->boolean();

            // salviamo i dati 
            $new_train->save();
        }
    }
}
