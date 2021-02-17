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
            $table->integer('division_collection_id')->default(0);
            $table->integer('division_id')->default(0);
            $table->date('date');
            $table->string('weather')->default('None');
            $table->double('total_division_latex_liters')->default(0);
            $table->double('total_division_latex_kgs')->default(0);
            $table->double('total_division_scrap_kgs')->default(0);
            $table->double('total_division_over_kgs')->default(0);
            $table->double('total_division_payable')->default(0);
            $table->double('total_division_kgs')->default(0);
            $table->integer('total_division_tappers')->default(0);
            $table->double('total_division_tap_per_hectare')->default(0);
            $table->double('total_division_wt')->default(0);
            $table->double('total_factory_wt')->default(0);
            $table->double('total_division_loss')->default(0);
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
