<?php

namespace Database\Factories;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Cliente::class;
    public function definition()
    {
        return [
            'nome' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'telefone' => $this->faker->phoneNumber(),
            'endereco' => $this->faker->address(),
            'cpf' => $this->faker->unique()->numerify('###########'),
            'data_nascimento' => $this->faker->date('Y-m-d', '2000-01-01'),
        ];
    }
}
