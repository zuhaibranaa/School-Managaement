<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'Role_Name' => 'Admin'
        ]);
        DB::table('roles')->insert([
            'Role_Name' => 'Teacher'
        ]);
        DB::table('roles')->insert([
            'Role_Name' => 'Student'
        ]);
    }
}
