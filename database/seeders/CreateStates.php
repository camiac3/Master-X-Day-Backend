<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CreateStates extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        \App\Models\FlightState::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');


        DB::table('flight_state')->insert(['id'=> 1, 'state' => 'delayed']);
        DB::table('flight_state')->insert(['id'=> 2, 'state' => 'boarding']);
        DB::table('flight_state')->insert(['id'=> 3, 'state' => 'cancelled']);
        DB::table('flight_state')->insert(['id'=> 4, 'state' => 'on-time']);
        DB::table('flight_state')->insert(['id'=> 5, 'state' => 'in-flight']);
    }
}
