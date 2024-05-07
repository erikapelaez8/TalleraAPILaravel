<?php

namespace Database\Factories;

use App\Models\Estudiante;
use App\Models\Categoria;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Estudiante>
 */
class EstudianteFactory extends Factory
{
    protected $model = Estudiante::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->firstName,
            'apellido' => $this->faker->lastName,
            'edad' => $this->faker->numberBetween(18, 30),
            'correo' => $this->faker->unique()->safeEmail,
            'direccion' => $this->faker->address,
            'fecha_nacimiento' => $this->faker->date(),
            'genero' => $this->faker->randomElement(['Masculino', 'Femenino', 'Otro']),
            'activo' => $this->faker->boolean,
            'promedio' => $this->faker->randomFloat(2, 0, 5),
            'categoria_id' => Categoria::factory()->create()->id,
        ];
    }
}
