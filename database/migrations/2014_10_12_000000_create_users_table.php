<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('firstName');
            $table->string('midName')->nullable();
            $table->string('lastName');
            $table->integer('day');
            $table->integer('month');
            $table->integer('year');
            $table->enum('gender', ['ذكر', 'أنثى']);
            $table->string('email');
            $table->string('phone')->unique();
            $table->string('governorate');
            $table->string('educationStatus');
            $table->string('academicLevel')->nullable();
            $table->string('graduationYear')->nullable();
            $table->string('employmentStatus')->nullable();
            $table->string('workSector')->nullable();
            $table->string('degree');
            $table->string('university')->nullable();
            $table->string('major')->nullable();
            $table->string('country')->nullable();
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
        Schema::dropIfExists('users');
    }
}