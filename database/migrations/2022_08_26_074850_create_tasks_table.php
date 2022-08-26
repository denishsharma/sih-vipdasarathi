<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('subject')->nullable();
            $table->text('description')->nullable();
            $table->unsignedBigInteger('disaster_case_id');
            $table->unsignedBigInteger('team_id')->index();
            $table->integer('priority')->default(0)->nullable();
            $table->unsignedBigInteger('task_type_id');
            $table->string('task_of')->nullable();
            $table->string('status')->nullable();
            $table->string('signature')->nullable()->unique();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('tasks');
    }
};
