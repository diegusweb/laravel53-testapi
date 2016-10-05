<?php

use Illuminate\Database\Seeder;
use Faker\Factory as F;

class PlaceTypesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = F::create('App\PlaceType');
        for ($i=0; $i < 15; $i++) {
            DB::table('place_types')->insert([
                'name'  => $faker->company,
                'description'   => $faker->text,
            ]);
        }
    }
}
