<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDivisionCollectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('division_collections', function (Blueprint $table) {
            $table->integer('division_collection_id');
            $table->integer('division_id');
            $table->date('date');
            $table->string('weather');
            $table->double('total_division_latex_liters');
            $table->double('total_division_latex_kgs');
            $table->double('total_division_scrap_kgs');
            $table->double('total_division_over_kgs');
            $table->double('total_division_payable');
            $table->double('total_division_kgs');
            $table->integer('total_division_tappers');
            $table->double('total_division_tap_per_hectare');
            $table->double('total_division_wt');
            $table->double('total_factory_wt');
            $table->double('total_division_loss');
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
        Schema::dropIfExists('division_collections');
    }
}
