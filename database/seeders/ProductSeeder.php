<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = Product::factory(50)->create();

        foreach($products as $product) {
            Image::factory(1)->create([
                'imageable_id' => $product->id,
                'imageable_type' => Product::class
            ]);
            $product->tickets()->attach([
                rand(1,25),
                rand(26,50)
            ]);

            $product->sends()->attach([
                rand(1,25),
                rand(26,50)
            ]);
        }
    }
}
