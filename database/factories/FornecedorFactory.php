<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Fornecedor>
 */
class FornecedorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => $this->faker->company(),
            'site' => $this->faker->unique()->safeEmail(),
            'uf' => $this->faker->stateAbbr(),
            'email' => $this->faker->unique()->safeEmail(),
        ];
    }
}
