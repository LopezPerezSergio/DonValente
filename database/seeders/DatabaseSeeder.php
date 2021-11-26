<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Customer;
use App\Models\Send;
use App\Models\State;
use App\Models\Ticket;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::deleteDirectory('products');
        Storage::makeDirectory('products');

        $this->call(UserSeeder::class);
        State::factory(32)->create();
        Customer::factory(50)->create();
        Category::factory(4)->create();
        Ticket::factory(50)->create();
        Send::factory(10)->create();
        $this->call(ProductSeeder::class);

    }
}
