<?php

namespace Database\Seeders;

use App\Models\Goal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GoalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Goal::factory()->create();
        Goal::factory()->create([
            'label' => 'lose weight',
        ]);
    }
}
