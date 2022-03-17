<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Coworker>
 */
class CoworkerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $this->faker->addProvider(new \Faker\Provider\pt_BR\Person($this->faker));
        return [
            'name' => $this->faker->name(),
            'cpf' => $this->faker->cpf(false),
            'birth_date' => $this->faker->date('Y-m-d', '-20 years')
        ];
    }
}
