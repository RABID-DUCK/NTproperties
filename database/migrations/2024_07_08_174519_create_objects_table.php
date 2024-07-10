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
        Schema::create('objects', function (Blueprint $table) {
            $table->id();
            $table->string('address');
            $table->string('city');
            $table->string('title');
            $table->string('description');
            $table->string('column_pitch');
            $table->string('lighting');
            $table->string('fire_system');
            $table->string('price_type');

            $table->integer('price');
            $table->integer('all_square');
            $table->integer('free_square');
            $table->integer('min_square');
            $table->integer('class_house');
            $table->integer('height');
            $table->integer('floor_load');
            $table->integer('zoom');

            $table->float('x_coord');
            $table->float('y_coord');

            $table->foreignIdFor(\App\Models\Regions::class, 'region_id')->constrained('regions');
            $table->foreignIdFor(\App\Models\HighWays::class, 'highway_id')->constrained('high_ways');
            $table->foreignIdFor(\App\Models\Directions::class, 'direction_id')->constrained('directions');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('objects');
    }
};
