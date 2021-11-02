<?php

use Illuminate\Database\Seeder;
use App\Trip;
use Faker\Generator as Faker;

class tripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {
            $newTrip = new Trip();
            $newTrip->firstname = $faker->firstName();
            $newTrip->lastname = $faker->lastName();
            $newTrip->flight_number = $faker->regexify('[A-Z]{3}[0-9]{3}');
            $newTrip->flight_number = $faker->regexify('[A-Z]{3}[0-9]{3}');
            $newTrip->flight_company = $faker->randomDigit();
            $newTrip->departure = $faker->dateTimeInInterval('-7 days', '+3 days');
            $newTrip->arrival = $faker->dateTimeInInterval('-6 days', '+4 days');
            $newTrip->price = $faker->randomFloat(2, 100, 2000);
            $newTrip->save();
        }
    }
}
