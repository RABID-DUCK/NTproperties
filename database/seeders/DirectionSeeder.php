<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DirectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $directions = [
            'Север',
            'Северо-восток',
            'Восток',
            'Юго-восток',
            'Юг',
            'Юго-запад',
            'Запад',
            'Северо-запад',
        ];

        foreach ($directions as $direction) {
            DB::table('directions')->insert([
                'name' => $direction,
                'created_at' => now(),
            ]);
        }
    }
}
