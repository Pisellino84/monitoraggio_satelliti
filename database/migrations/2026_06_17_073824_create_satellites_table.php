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
        Schema::create('satellites', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('model');
            $table->foreignId('customer_id');
            $table->string('image');
            $table->enum('status', ["active","inactive","in_alarm","under_maintenance"]);
            $table->integer('norad');
            $table->string('cospair');
            $table->enum('orbit_type', ["LEO","MEO","GEO","SSO"]);
            $table->decimal('inclination', 5, 2);
            $table->integer('apogee');
            $table->integer('perigee');
            $table->dateTime('lauch_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('satellites');
    }
};
