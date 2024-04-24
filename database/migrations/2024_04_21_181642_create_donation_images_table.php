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
        Schema::create('donation_images', function (Blueprint $table) {
            $table->id();
            $table->string('path');
            $table->bigInteger('donation_id')->unsigned();
            $table->foreign('donation_id')->references('id')->on('donations');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donation_images');
    }
};
