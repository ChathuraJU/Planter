<?php

use Illuminate\Database\Seeder;

class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_types')->insert([
            'id' => '0',
            'user_type_name' => 'Admin',
            'status' => '1',
            ]);
        DB::table('user_types')->insert([
            'id' => '1',
            'user_type_name' => 'Director',
            'status' => '1',
        ]);
        DB::table('user_types')->insert([
            'id' => '2',
            'user_type_name' => 'Manager',
            'status' => '1',
            ]);
        DB::table('user_types')->insert([
            'id' => '3',
            'user_type_name' => 'Estate Officer',
            'status' => '1',
        ]);
        DB::table('user_types')->insert([
            'id' => '4',
            'user_type_name' => 'Factory Officer',
            'status' => '1',
            ]);
        DB::table('user_types')->insert([
            'id' => '5',
            'user_type_name' => 'Field Officer',
            'status' => '1',
        ]);
        DB::table('user_types')->insert([
            'id' => '6',
            'user_type_name' => 'Labour',
            'status' => '1',
        ]);

    }
}
