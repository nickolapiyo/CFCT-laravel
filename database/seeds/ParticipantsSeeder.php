<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ParticipantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('participants')->insert([
            ['first_name' => 'John',
            'last_name' => 'Doe',
            'dob' => Carbon::parse('2000-01-01'),
            'gender' => 'M',
            'country' => 'Kenya',
            ],
            ['first_name' => 'Jane',
            'last_name' => 'Doe',
            'dob' => Carbon::parse('2013-01-01'),
            'gender' => 'F',
            'country' => 'Kenya',
            ],
        ]);
    }
}
