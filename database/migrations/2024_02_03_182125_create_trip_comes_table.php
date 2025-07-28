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
        Schema::create('trip_comes', function (Blueprint $table) {
            $table->id();
            $table->string('img');
            $table->string('negara');
            $table->string('tgl_berangkat');
            $table->string('link');
            $table->longText('itinerary');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trip_comes');
    }
};
