<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disaster_cases', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('address_line')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('city')->nullable();
            $table->string('district')->nullable();
            $table->unsignedBigInteger('state_id')->nullable();
            $table->unsignedBigInteger('disaster_type_id')->nullable();
            $table->unsignedBigInteger('case_meta_data_id')->nullable();
            $table->string('status')->nullable()->default('pending');
            $table->string('priority')->nullable();
            $table->dateTime('happened_at')->nullable();
            $table->string('signature')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('disaster_cases');
    }
};
