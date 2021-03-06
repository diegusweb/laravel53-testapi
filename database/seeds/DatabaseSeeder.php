<?php

use Illuminate\Database\Seeder;
use Faker\Factory as F;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        //$this->call(PlaceTypesSeed::class);
        $this->call(PlaceSeeder::class);
        //$this->call(ProductTableSeeder::class);

        Model::reguard();
    }
}
