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
        Schema::create('trainees', function (Blueprint $table) {
            $table->id();
            $table->string('education_level');
            $table->string('district');
            $table->string('email')->unique();
            $table->string('lastName');
            $table->string('firstName');
            $table->string('gender');
            $table->string('field_of_study');
            $table->string('birth_date');
            $table->string('province');
            $table->string('sector');
            $table->string('Address');
            $table->string('phone')->unique();
            $table->string('isStudent');
            $table->string('haveLaptop');
            $table->string('isEmployed');
            $table->string('Hackerrank_score');
            $table->string('english_score');
            $table->string('interview');
            $table->string('interview_decision');
            $table->string('past_andela_programs');
            $table->string('cycle_name');
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
        Schema::dropIfExists('trainees');
    }
};
