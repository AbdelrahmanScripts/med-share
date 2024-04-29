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
        Schema::create('charits', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('image')->nullable();
            // $table->string('phone')->nullable()->unique();
            // $table->text('description')->nullable();
            // $table->string('website_link')->nullbale()->unique();
            // $table->boolean('isAtive')->default(0);
            // $table->bigInteger('admin_id')->unsigned()->nullable();
            // $table->foreign('admin_id')->references('id')->on('admins');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('charits');
    }
};
