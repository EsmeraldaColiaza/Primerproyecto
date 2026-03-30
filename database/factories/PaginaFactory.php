<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Pagina;
use Illuminate\Support\Facades\Hash;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pagina>
 */

class PaginaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

protected $model = Pagina::class;

public function definition(): array
{    return [
        'name' => $this->faker->sentence(), //Si le ponemos datos los va a meter en la bdd
        'email' => $this->faker->unique()->safeEmail(),
        'email_verified_at' => $this->faker->optional()->dateTime(),
        'password' => Hash::make('password'), // password
        'avatar' => $this->faker->optional()->imageUrl(200, 200, 'people'), // Genera una URL de imagen aleatoria
        'telefono' => $this->faker->phoneNumber(), // Genera un número de teléfono aleatorio
        'calle' => $this->faker->streetAddress(), // Genera una dirección de calle aleatoria
        'is_active' => $this->faker->boolean(), // Genera un valor booleano aleatorio
        'created_at' => now(), // Genera una fecha y hora aleatoria dentro del año actual
        'updated_at' => now(), // Genera
    ];  
    
}



}