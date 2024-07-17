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
        Schema::table('directions', function (Blueprint $table) {
            $table->string('eng_name')->nullable();
        });

        Schema::table('high_ways', function (Blueprint $table) {
            $table->string('eng_name')->nullable();
        });

        Schema::table('regions', function (Blueprint $table) {
            $table->string('eng_name')->nullable();
        });

        Schema::table('news', function (Blueprint $table) {
            $table->string('eng_title')->nullable();
            $table->string('eng_description')->nullable();
        });

        Schema::table('reviews', function (Blueprint $table) {
            $table->string('eng_title')->nullable();
            $table->string('eng_description')->nullable();
        });

        Schema::table('objects', function (Blueprint $table) {
            $table->string('eng_city')->nullable();
            $table->string('eng_title')->nullable();
            $table->string('eng_description')->nullable();
            $table->string('eng_lighting')->nullable();
            $table->string('eng_fire_system')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tables', function (Blueprint $table) {
            //
        });
    }
};
