<?php

use Illuminate\Database\Seeder;

class TasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
            'task_id' => '1',
            'task_name' => 'Cuttings Layout'
        ]);
        DB::table('tasks')->insert([
            'task_id' => '2',
            'task_name' => 'Folio Spraying 1st Round'
        ]);
        DB::table('tasks')->insert([
            'task_id' => '3',
            'task_name' => 'Folio Spraying 2nd Round'
        ]);
        DB::table('tasks')->insert([
            'task_id' => '4',
            'task_name' => 'Folio Spraying 3rd Round'
        ]);
        DB::table('tasks')->insert([
            'task_id' => '5',
            'task_name' => 'Folio Spraying 4th Round'
        ]);
        DB::table('tasks')->insert([
            'task_id' => '6',
            'task_name' => 'Folio Spraying 5th Round'
        ]);
        DB::table('tasks')->insert([
            'task_id' => '7',
            'task_name' => 'Folio Spraying 6th Round'
        ]);
        DB::table('tasks')->insert([
            'task_id' => '8',
            'task_name' => 'Fertilizer 7th Round'
        ]);
        DB::table('tasks')->insert([
            'task_id' => '9',
            'task_name' => 'Folio Spraying 8th Round'
        ]);

        DB::table('tasks')->insert([
            'task_id' => '10',
            'task_name' => 'Folio Spraying 9th Round'
        ]);
        DB::table('tasks')->insert([
            'task_id' => '11',
            'task_name' => 'Folio Spraying 10th Round'
        ]);
        DB::table('tasks')->insert([
            'task_id' => '12',
            'task_name' => 'Folio Spraying 11th round'
        ]);
        DB::table('tasks')->insert([
            'task_id' => '13',
            'task_name' => 'Folio Spraying 12th Round'
        ]);
        DB::table('tasks')->insert([
            'task_id' => '14',
            'task_name' => 'Folio Spraying 13th round'
        ]);
        DB::table('tasks')->insert([
            'task_id' => '15',
            'task_name' => 'Folio Spraying 14th Round'
        ]);
        DB::table('tasks')->insert([
            'task_id' => '16',
            'task_name' => 'Folio Spraying 15th round'
        ]);
        DB::table('tasks')->insert([
            'task_id' => '17',
            'task_name' => 'Folio Spraying 16th Round'
        ]);
        DB::table('tasks')->insert([
            'task_id' => '18',
            'task_name' => 'Folio Spraying 17th Round'
        ]);

        DB::table('tasks')->insert([
            'task_id' => '19',
            'task_name' => 'Folio Spraying 18th Round'
        ]);
        DB::table('tasks')->insert([
            'task_id' => '20',
            'task_name' => 'Folio Spraying 19th round'
        ]);
        DB::table('tasks')->insert([
            'task_id' => '21',
            'task_name' => 'Fertilizer 1st Round'
        ]);
        DB::table('tasks')->insert([
            'task_id' => '22',
            'task_name' => 'Fertilizer 2nd Round'
        ]);
        DB::table('tasks')->insert([
            'task_id' => '23',
            'task_name' => 'Fertilizer 3rd Round'
        ]);
        DB::table('tasks')->insert([
            'task_id' => '24',
            'task_name' => 'Fertilizer 4th Round'
        ]);
        DB::table('tasks')->insert([
            'task_id' => '25',
            'task_name' => 'Field Laying'
        ]);

    }
}
