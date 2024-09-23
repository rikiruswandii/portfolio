<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // // Create a role (optional if roles are needed)
        // $adminRole = Roles::where('name', 'admin')->first();

        // // If the role doesn't exist, create it
        // if (! $adminRole) {
        //     $adminRole = Roles::create(['name' => 'admin']);
        // }

        // Create another user
        User::create([
            'name' => 'Mikeu dev',
            'email' => 'mikeumikeudeh@gmail.com',
            'password' => Hash::make('Mikeu28*'),
        ]);
    }
}