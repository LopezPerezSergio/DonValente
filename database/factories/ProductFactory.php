<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->unique()->sentence();

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'description' => $this->faker->text(250),
            'lote' => $this->faker->numberBetween(100, 500),
            'amount' => $this->faker->randomFloat(2, 0, 1),
            'status' => $this->faker->randomElement([1,2]),

            'category_id' => Category::all()->random()->id,
        ];
    }
}
