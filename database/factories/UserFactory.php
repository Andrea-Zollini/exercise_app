<?php

namespace Database\Factories;

use App\Models\Goal;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => Hash::make('password'),
            'target_date' => $this->faker->date('d-m-Y'),
            'current_progress' => $this->faker->numberBetween(
                int1: 0,
                int2: 100
            ),
            'height' => $this->faker->numberBetween(
                int1: 150,
                int2: 200
            ),
            $initial_weight = 'initial_weight' => $this->faker->numberBetween(
                int1: 50,
                int2: 100
            ),
            'target_weight' => (int)$initial_weight + 10,
            'age' => $this->faker->numberBetween(
                int1: 20,
                int2: 70
            ),
            'email_verified_at' => now(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
