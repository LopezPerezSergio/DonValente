<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ticket' => $this->faker->paragraph(100),
            'create_at' => $this->faker->date(),
            'user_id' => User::all()->random()->id,
        ];
    }
}
