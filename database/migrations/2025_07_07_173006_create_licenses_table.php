<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('licenses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('applicant_id');
            $table->string('gender');
            $table->string('age_group');
            $table->string('race');
            $table->string('training');
            $table->integer('signals');
            $table->integer('yield');
            $table->integer('speed_control');
            $table->integer('night_drive');
            $table->integer('road_signs');
            $table->integer('steer_control');
            $table->integer('mirror_usage');
            $table->integer('confidence');
            $table->integer('parking');
            $table->integer('theory_test');
            $table->integer('reactions');
            $table->boolean('qualified');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('licenses');
    }
};
