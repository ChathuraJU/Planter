<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollectionApprovalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collection_approvals', function (Blueprint $table) {
            $table->id();
            $table->integer('div_collection_id');
            $table->integer('user_type_id');
            $table->integer('user_id');
            $table->date('approval_date');
            $table->string('note');
            $table->string('images');
            $table->binary('approval_status');
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
        Schema::dropIfExists('collection_approvals');
    }
}
