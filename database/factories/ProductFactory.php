<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'TypeProduct_id' =>rand(1,3), // Giả sử bạn có factory cho TypeProduct
            'image' => 'image/products/img' . rand(1, 8) . '.jpg',
            'name_product' => $this->faker->word(),
            'price' => $this->faker->randomFloat(3, 100, 10000),
            'description' => $this->faker->paragraph(),
            'quantity' => $this->faker->numberBetween(1, 100),
            'status' => $this->faker->boolean(),
        ];
    }
}
