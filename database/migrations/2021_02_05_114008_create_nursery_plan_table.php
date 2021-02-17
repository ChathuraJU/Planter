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
            $table->integer('nursery_id')->default(0);
            $table->integer('task_id')->default(0);
            $table->date('scheduled_date');
            $table->date('completed_date');
            $table->boolean('status')->default(false);
            $table->integer('user_id')->default(0);
            $table->string('note')->nullable();

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
