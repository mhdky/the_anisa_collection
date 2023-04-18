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
            'category_id' => mt_rand(1,2),
            'name' => fake()->sentence(mt_rand(5,7)),
            'url' => uniqid() . uniqid() . uniqid(),
            'detail' => fake()->paragraph(mt_rand(3,5)),
            'price' => mt_rand(700000, 3700000),
            'image' => 'product-' . mt_rand(1,20) . '.jpg',
            'stock' => mt_rand(30,150),
            'size' => 'XL',
            'merek' => 'nike',
            'bahan' => 'catton combed 20s',
            'jenis_lengan' => 'lengan panjang'
        ];
    }
}
