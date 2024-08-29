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
        Schema::create('set_contacts', function (Blueprint $table) {
            $table->id();
            $table->string('icon1')->nullable();
            $table->string('title1')->nullable();
            $table->string('location')->nullable();
            $table->string('email')->nullable();
            $table->string('icon2')->nullable();
            $table->string('title2')->nullable();
            $table->string('phone1')->nullable();
            $table->string('phone2')->nullable();
            $table->string('icon3')->nullable();
            $table->string('title3')->nullable();
            $table->string('email1')->nullable();
            $table->string('email2')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('set_contacts');
    }
};
