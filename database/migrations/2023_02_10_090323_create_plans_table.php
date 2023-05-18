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
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->string('airline_company');
            $table->string('flight_number');
            $table->string('airplane_type');
            $table->string('gate');
            $table->string('time');
            $table->string('arrival');
            $table->foreignId('employee_id')->constrained('employees')->cascadeOnDelete();
            $table->string('airplane_reg');
            $table->text('notes');
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
        Schema::dropIfExists('plans');
    }
};
