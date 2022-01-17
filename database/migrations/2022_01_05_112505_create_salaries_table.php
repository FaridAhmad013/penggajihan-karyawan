<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salaries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained();
            $table->bigInteger('transportation_allowance')->default(0);
            $table->bigInteger('achievement_allowance')->default(0);
            $table->bigInteger('education_allowance')->default(0);
            $table->bigInteger('overtime')->default(0);
            $table->bigInteger('bonus')->default(0);
            $table->bigInteger('insurance_deduction')->default(0);
            $table->bigInteger('college_deduction')->default(0);
            $table->bigInteger('pension')->default(0);
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
        Schema::dropIfExists('salaries');
    }
}
