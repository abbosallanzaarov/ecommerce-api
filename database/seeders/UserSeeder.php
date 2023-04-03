<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{


    public function run(): void
    {
        $admin = User::create([
            'first_name' =>  "Admin",
            'last_name' =>  "Admin",
            'phone' =>  "00000",
            'email' => 'admin@gmail.com',
            'password' => Hash::make('abbos7677')
        ]);
        $admin->roles()->attach(1);
        User::factory()->count(20)->hasAttached(Role::find(2))->create();
    }
}
