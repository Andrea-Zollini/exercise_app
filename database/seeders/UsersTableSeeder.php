<?php

namespace Database\Seeders;

use App\Models\Goal;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $goal = Goal::all()->random(1)->first();


        $user = User::factory()->create([
            'name' => 'Giuseppe Meazza',
            'email' => 'peppe@test.com',
        ]);

        $user->goal_id = $goal->id;
        $user->save();
    }
}
