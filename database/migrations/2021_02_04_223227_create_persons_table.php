<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persons', function (Blueprint $table) {
            $table->bigInteger('person_id');
            $table->integer('user_type_id')->default(0);
            $table->string('fname')->default('None');
            $table->string('lname')->default('None');
            $table->string('gender')->default('None');
            $table->date('dob')->nullable();
            $table->string('nic')->default('None');
            $table->string('contact')->default('None');
            $table->string('address')->default('None');
            $table->string('epf')->default('None');
            $table->string('image')->nullable();
            $table->boolean('status')->default(true);
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
        Schema::dropIfExists('persons');
    }
}
