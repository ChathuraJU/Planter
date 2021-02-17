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
            $table->integer('division_collection_id')->default(0);
            $table->integer('field_id')->default(0);
            $table->integer('block_id')->default(0);
            $table->integer('hectare')->default(0);
            $table->integer('no_of_tappers')->default(0);
            $table->double('tap_per_hectare')->default(0);
            $table->double('field_wt')->default(0);
            $table->double('factory_wt')->default(0);
            $table->double('loss')->default(0);
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
