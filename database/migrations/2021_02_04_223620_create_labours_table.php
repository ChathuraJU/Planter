<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaboursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('labours', function (Blueprint $table) {
            $table->bigInteger('labour_id');
            $table->integer('person_id')->default(0);
            $table->double('tot_latex_liters')->default(0);
            $table->double('tot_latex_kg')->default(0);
            $table->double('tot_scrap_kg')->default(0);
            $table->double('tot_over_kg')->default(0);
            $table->double('salary_paid')->default(0);
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
        Schema::dropIfExists('labours');
    }
}
