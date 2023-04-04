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
            'category_id'=> rand(1,3),
            'name'  =>[
                'uz'=>  fake()->sentence(3),
                'ru' => 'Диаграмма без названия'
            ],
            'price' => rand(50000, 200000),
            'desc'=> [
                'uz'=> fake()->paragraph(8),
                'ru'=> 'Диаграмма без названия Диаграмма без названия Диаграмма без названия Диаграмма без названия'
            ]
        ];
    }
}
