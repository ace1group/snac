<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    public function definition(): array
    {
        $productName = ucfirst($this->faker->word()) . ' ' . ucfirst($this->faker->word());
        return [
            'sku' => strtoupper($this->faker->unique()->lexify('SKU-????')),
            'name' => $productName,
            'description' => $this->faker->paragraph(1),
            'text' => $this->faker->paragraph(3),
            'price' => $this->faker->randomFloat(2, 10, 1000),
        ];
    }
}
