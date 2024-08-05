<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->text('feedback');
            $table->unsignedTinyInteger('facilities_rating');
            $table->unsignedTinyInteger('coaching_rating');
            $table->unsignedTinyInteger('atmosphere_rating');
            $table->integer('like_count')->default(0);
            $table->integer('dislike_count')->default(0);
            $table->boolean('status')->default(1);
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('gym_id');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('gym_id')->references('id')->on('gyms')->onDelete('cascade');

            // Adding missing fields
            $table->unsignedTinyInteger('equipment_quality');
            $table->unsignedTinyInteger('safety_standards');
            $table->unsignedTinyInteger('communication');
            $table->unsignedTinyInteger('value_for_money');
            $table->unsignedTinyInteger('class_variety');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};

