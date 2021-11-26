<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Sergio Lopez Perez',
            'email' => 'l17161158@oaxaca.tecnm.mx',
            'password'=> encrypt('12345678')
        ]);
        
        User::factory(24)->create();
    }
}
