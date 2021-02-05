<?php

use Illuminate\Database\Seeder;

class FieldsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fields')->insert([
            'field_id' => '1',
            'division_id' => '1',
            'user_id' => '',
            'field_name' => '2005',
            'hectare' => '4',
            'image' => '',
        ]);
        DB::table('fields')->insert([
            'field_id' => '2',
            'division_id' => '1',
            'user_id' => '',
            'field_name' => '2006',
            'hectare' => '2.5',
            'image' => '',
        ]);
        DB::table('fields')->insert([
            'field_id' => '3',
            'division_id' => '2',
            'user_id' => '',
            'field_name' => '2025',
            'hectare' => '5.5',
            'image' => '',
        ]);
        DB::table('fields')->insert([
            'field_id' => '4',
            'division_id' => '2',
            'user_id' => '',
            'field_name' => '2027',
            'hectare' => '8',
            'image' => '',
        ]);
    }
}
