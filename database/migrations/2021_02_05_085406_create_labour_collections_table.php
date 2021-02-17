<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLabourCollectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('labour_collections', function (Blueprint $table) {
            $table->integer('labour_collection_id')->default(0);
            $table->integer('labour_id')->default(0);
            $table->integer('division_collection_id')->default(0);
            $table->integer('field_id')->default(0);
            $table->integer('block_id')->default(0);
            $table->double('labour_latex_liters')->default(0);
            $table->double('metrolac_reading')->default(0);
            $table->double('labour_latex_kgs')->default(0);
            $table->double('labour_scrap_kgs')->default(0);
            $table->double('labour_over_kgs')->default(0);
            $table->integer('labour_field_norms')->default(0);
            $table->double('labour_payable')->default(0);
            $table->boolean('labour_pay_status')->default(false);
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
        Schema::dropIfExists('labour_collections');
    }
}
