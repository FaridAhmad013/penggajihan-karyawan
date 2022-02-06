<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id()->from(100000);
            $table->string('name');
            $table->string('username')->unique();
            $table->string('password')->default('admin');
            $table->string('photo')->nullable();
            $table->string('phone_number')->nullable();
            $table->text('address');
            $table->enum('gender', ['laki-laki', 'perempuan']);
            $table->date('entry_date')->default(now());
            $table->foreignId('job_id')->constrained();
            $table->string('education');
            $table->bigInteger('basic_salary');
            $table->enum('status', ['tetap', 'kontrak']);
            $table->boolean('active')->default(1);
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
        Schema::dropIfExists('employees');
    }
}
