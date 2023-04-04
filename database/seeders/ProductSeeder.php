<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = Product::factory()->count(50)->create();
        foreach ($products as $product) {
            $json = json_encode(
                [
                    'attributes_id' => 1,
                    'value_id' => rand(1, 3)
                ]
            );
            $product->stocks()->create([
                'quantity' => rand(1, 15),
                'attributes' => $json
            ]);
        }
    }
}
