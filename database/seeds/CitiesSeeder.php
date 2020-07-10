<?php

use Illuminate\Database\Seeder;
use App\City;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       for ($i = 0; $i < 100; $i++) {
           $new_city = new City;
           $new_city->name = 'città' . $i;
           $new_city->lat = 45.0776;
           $lng = 7.6824 + $i * 0.09;
           $new_city->lng = $lng;
           
           $new_city->save();
       }
    }
}
