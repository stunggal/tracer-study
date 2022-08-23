<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'full_name' => $this->faker->name,
            'student_email' => $this->faker->email(),
            'nim' => $this->faker->unique()->numerify('402029622-###'),
            'username' => $this->faker->word(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'tahun_lulus' => $this->faker->numberBetween(2018, 2024),
            'isFilledOutTheForm' => $this->faker->boolean(),
            'program_studi' => $this->faker->randomElement(['pai', 'pba', 'tbi', 'saa', 'afi', 'iqt', 'pm', 'hes', 'mnj', 'ei', 'agro', 'ti', 'tip', 'hi', 'ilkom', 'kkk', 'farmasi', 'gizi'])
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
