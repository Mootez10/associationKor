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
        Schema::create('config_homes', function (Blueprint $table) {
            $table->id();
            $table->string('banner')->nullable();
            $table->string('banner2')->nullable();
            $table->string('nameSourra')->nullable();
            $table->string('logo')->nullable();
            $table->string('descAssociation')->nullable();
            $table->string('activities')->nullable();
            $table->string('services')->nullable();
            $table->string('service_item_icon')->nullable();
            $table->string('service_item_title')->nullable();
            $table->string('service_item_desc')->nullable();
            $table->string('upcoming_events')->nullable();
            $table->string('upcoming_event_banner')->nullable();
            $table->string('upcoming_event_title')->nullable();
            $table->string('upcoming_event_datetime')->nullable();
            $table->string('upcoming_event_descp')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('config_homes');
    }
};
