<?php

use Illuminate\Database\Seeder;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('divisions')->insert([
            'division_id' => '1',
            'division_name' => 'Upper Division',
            'division_per_field_norm_payment' => '1000',
            'division_per_over_kg_payment' => '40',
            'status' => '1',
        ]);
        DB::table('divisions')->insert([
            'division_id' => '2',
            'division_name' => 'Lower Division',
            'division_per_field_norm_payment' => '1000',
            'division_per_over_kg_payment' => '40',
            'status' => '1',
        ]);
    }
}
