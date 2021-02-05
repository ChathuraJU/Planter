<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNurseryPlanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nursery_plan', function (Blueprint $table) {
            $table->id();
            $table->integer('nursery_id');
            $table->integer('task_id');
            $table->date('scheduled_date');
            $table->date('completed_date');
            $table->binary('status');
            $table->integer('user_id');
            $table->string('note');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nursery_plan');
    }
}
