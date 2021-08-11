<?php

use Illuminate\Database\Seeder;

class MembershipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('household_memberships')->insert([
            ['household_id' => '2',
             'participant_id' => '1',
            ],
            ['household_id' => '2',
             'participant_id' => '2',
            ],
        ]);
    }
}
