<?php

use Illuminate\Database\Seeder;

class BlocksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blocks')->insert([
            'id' => '1',
            'block_no' => '1',
            'field_id' => '1',
            'hectare' => '2.75',
        ]);
        DB::table('blocks')->insert([
            'id' => '2',
            'block_no' => '2',
            'field_id' => '1',
            'hectare' => '1.25',
        ]);
        DB::table('blocks')->insert([
            'id' => '3',
            'block_no' => '3',
            'field_id' => '2',
            'hectare' => '1.5',
        ]);
        DB::table('blocks')->insert([
            'id' => '4',
            'block_no' => '4',
            'field_id' => '2',
            'hectare' => '1',
        ]);
        DB::table('blocks')->insert([
            'id' => '5',
            'block_no' => '5',
            'field_id' => '3',
            'hectare' => '3',
        ]);
        DB::table('blocks')->insert([
            'id' => '6',
            'block_no' => '6',
            'field_id' => '3',
            'hectare' => '2.5',
        ]);
        DB::table('blocks')->insert([
            'id' => '7',
            'block_no' => '7',
            'field_id' => '4',
            'hectare' => '4.25',
        ]);
        DB::table('blocks')->insert([
            'id' => '8',
            'block_no' => '8',
            'field_id' => '4',
            'hectare' => '3.75',
        ]);
    }
}
