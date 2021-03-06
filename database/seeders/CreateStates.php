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

        DB::table('fligths_states')->insert([
        	'flight_state_id'=> 1, 
        	'current_state' => 'delayed']);
        DB::table('fligths_states')->insert([
        	'flight_state_id'=> 2,
        	'current_state' => 'boarding']);
        DB::table('fligths_states')->insert(['flight_state_id'=> 3, 'current_state' => 'cancelled']);
        DB::table('fligths_states')->insert(['flight_state_id'=> 4, 'current_state' => 'on-time']);
        DB::table('fligths_states')->insert(['flight_state_id'=> 5, 'current_state' => 'in-flight']);
    }
}
