<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $events = [
            ['id' => 1, 'location' => 'Malang', 'name' => 'Kerja Bakti'],
            ['id' => 2, 'location' => 'Banjarmasin', 'name' => 'Lomba Melukis'],
            ['id' => 3, 'location' => 'Medan', 'name' => 'Rapat Tahunan'],
        ];

        foreach ($events as $event) {
            \App\Models\Event::create($event);
        }
    }
}
