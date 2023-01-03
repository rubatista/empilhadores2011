<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\ProductDetail;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductDetailFactory extends Factory
{

    protected $model = ProductDetail::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'product_id' => Product::factory(),
            'condition' => $this->faker->name(),
            'hours' => $this->faker->numberBetween(0, 500),
            'fuel' => $this->faker->randomElement(['Diesel', 'Eletrico', 'Gás']),
            'brand' => $this->faker->randomElement(['Nissan', 'Linde']),
            'rated_capacity' => $this->faker->randomElement(['300kg', '350kg', '150kg']),
            'lifting_height' => $this->faker->randomElement(['1500kg', '2500kg', '3500kg']),
            'color' => $this->faker->randomElement(['vermelho', 'cinzeto', 'preto']),
            'options' => null,
        ];
    }
}
