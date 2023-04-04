<?php

namespace Database\Seeders;

use App\Models\Attiribute;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttiributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Attiribute::create(['name'=> 'color']);
        Attiribute::create(['name'=> 'material']);
        Attiribute::create(['name'=> 'size']);

    }
}
