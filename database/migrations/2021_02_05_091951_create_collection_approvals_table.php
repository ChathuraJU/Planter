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
            $table->integer('div_collection_id')->default(0);
            $table->integer('user_type_id')->default(0);
            $table->integer('user_id')->default(0);
            $table->date('approval_date');
            $table->string('note')->nullable();
            $table->string('images')->nullable();
            $table->boolean('approval_status')->default(false);
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
