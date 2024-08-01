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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->text('report'); // Changed from integer to text to hold the report content
            $table->unsignedBigInteger('user_id'); // Use unsignedBigInteger for foreign keys
            $table->unsignedBigInteger('review_id'); // Use unsignedBigInteger for foreign keys
            $table->timestamps();

            // Add foreign key constraints if the referenced tables exist
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('review_id')->references('id')->on('reviews')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
