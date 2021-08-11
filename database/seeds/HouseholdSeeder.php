<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class HouseholdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('households')->insert([
            ['household_name' => 'Jack', 
             'created_at' => date("Y-m-d H:i:s"), 
             'updated_at' => date("Y-m-d H:i:s")
            ],                
            ['household_name' => 'Doe', 
             'created_at' => date("Y-m-d H:i:s"), 
             'updated_at' => date("Y-m-d H:i:s")
            ]
        ]);
    }
}
