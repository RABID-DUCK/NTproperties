<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HighWaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $directions = [
            'Горьковское шоссе',
            'Дмитровское шоссе',
            'Каширское шоссе',
            'Киевское шоссе',
            'Ленинградское шоссе',
            'М4-Дон',
            'Минское шоссе',
            'МКАД',
            'Новорижское шоссе',
            'Новорязанское шоссе',
            'Подольск',
            'Рогачевское шоссе',
            'Симферопольское шоссе',
            'Ярославское шоссе',
        ];

        foreach ($directions as $direction) {
            DB::table('high_ways')->insert([
                'name' => $direction,
                'created_at' => now(),
            ]);
        }
    }
}
