<?php

use Illuminate\Database\Seeder;
use Faker\Factory as F;
use App\PlaceTypes;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = F::create('App\Place');
        for ($i=0; $i < 30; $i++) {
            DB::table('places')->insert([
                'user_id'  => 1,
                'place_type_id' => rand(1, 5),
                'name'  => 'pl-'.$faker->company,
                'description'   => $faker->text,
                'email' => $faker->email,
                'path' => '5.jpg',
                'status' => true,
            ]);
        }
    }
}
