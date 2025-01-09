<?php

namespace Database\Factories;

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
            'birth_date' => $this->faker->date('Y-m-d', '-18 years'),
            'nationality' => $this->faker->country(),
            'residence_state' => $this->faker->state(),
            'residence_governorate' => $this->faker->city(),
            'educational_qualification' => $this->faker->randomElement(['High School', 'Bachelor', 'Master', 'PhD']),
            'phone' => $this->faker->phoneNumber(),
            'alternative_phone' => $this->faker->optional()->phoneNumber(),
            'alternative_phone_owner' => $this->faker->optional()->name(),
            'telegram_id' => $this->faker->unique()->userName(),
            'telegram_name' => $this->faker->userName(),
            'quantity_of_quran' => $this->faker->numberBetween(0, 30),
            'job' => $this->faker->optional()->jobTitle(),
            'marital_status' => $this->faker->optional()->randomElement(['married', 'divorced', 'widowed', 'single']),
            'password' => bcrypt('password'),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn(array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
