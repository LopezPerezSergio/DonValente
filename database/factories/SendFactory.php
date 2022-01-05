<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\State;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SendFactory extends Factory
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
            'paqueteria' => $name,
            'guia' => $this->faker->unique()->sentence(),
            'status' => $this->faker->randomElement([1,2]),
            'user_id' => User::all()->random()->id,
            'customer_id'=> Customer::all()->random()->id,
        ];
    }
}
