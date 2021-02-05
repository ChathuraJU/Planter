<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDivisionReceivablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('division_receivables', function (Blueprint $table) {
            $table->id();
            $table->integer('division_collection_id');
            $table->integer('field_id');
            $table->integer('block_id');
            $table->integer('hectare');
            $table->integer('no_of_tappers');
            $table->double('tap_per_hectare');
            $table->double('field_wt');
            $table->double('factory_wt');
            $table->double('loss');
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
        Schema::dropIfExists('division_receivables');
    }
}
