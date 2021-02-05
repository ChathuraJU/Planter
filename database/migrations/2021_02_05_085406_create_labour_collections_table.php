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
            $table->integer('labour_collection_id');
            $table->integer('labour_id');
            $table->integer('division_collection_id');
            $table->integer('field_id');
            $table->integer('block_id');
            $table->double('labour_latex_liters');
            $table->double('metrolac_reading');
            $table->double('labour_latex_kgs');
            $table->double('labour_scrap_kgs');
            $table->double('labour_over_kgs');
            $table->integer('labour_field_norms');
            $table->double('labour_payable');
            $table->binary('labour_pay_status');
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
