<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => [
                'uz'=> 'stol',
                'ru'=> 'ru_stol',
            ]
            ]);
            Category::create([
                'name' => [
                    'uz'=> 'divan',
                    'ru'=> 'ru_divan',
                ]
                ]);
                Category::create([
                    'name' => [
                        'uz'=> 'kreslo',
                        'ru'=> 'ru_kreslo',
                    ]
                    ]);
    }
}
