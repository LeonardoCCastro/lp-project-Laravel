<?php

namespace Database\Factories;

use Spatie\Permission\Models\Role;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Role>
 */
class RoleFactory extends Factory
{
    protected $model = Role::class;

    public function definition()
    {
        return [
            'name' => $this->faker->unique()->word, // Gera um nome único
            'guard_name' => 'web', // Você pode ajustar o guard_name conforme necessário
        ];
    }
}
