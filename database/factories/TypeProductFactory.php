<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TypeProduct>
 */
class TypeProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
       $mang = ['Rau Sạch', 'Củ,Quả', 'Trái Cây'];
        return [
            'Type' => $this->faker->unique()->randomElement($mang)
        ];
    }
}
