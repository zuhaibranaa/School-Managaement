<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class StatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuses')->insert([
            'Name' => 'Active'
        ]);
        DB::table('statuses')->insert([
            'Name' => 'Pending'
        ]);
        DB::table('statuses')->insert([
            'Name' => 'Disqualified'
        ]);
    }
}
