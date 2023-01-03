<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{

    protected $model = Product::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'sub_category_id' => 1,
            'name' => $this->faker->name(),
            'slug' => $this->faker->slug(),
            'is_new' => $this->faker->numberBetween(0, 1),
            'is_active' => $this->faker->numberBetween(0, 1),
        ];
    }
}
