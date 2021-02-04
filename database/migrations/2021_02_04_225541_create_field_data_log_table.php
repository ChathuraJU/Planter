<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFieldDataLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('field_data_log', function (Blueprint $table) {
            $table->integer('field_data_log_id');
            $table->date('date');
            $table->string('weather');
            $table->integer('user_id');
            $table->string('note');
            $table->string('images');
            $table->integer('division_id');
            $table->double('no_field_tappers');
            $table->double('no_field_latex_ltrs');
            $table->double('no_field_latex_kgs');
            $table->double('no_field_scrap_kgs');
            $table->double('no_field_total_kgs');
            $table->double('tot_tappers');
            $table->double('tot_latex_ltrs');
            $table->double('tot_latex_kgs');
            $table->double('tot_scrap_kgs');
            $table->double('tot_kgs');
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
        Schema::dropIfExists('field_data_log');
    }
}
