<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'stephen bacolor',
            'email' => 'stephenbacolor32@gmail.com',
            'password' => Hash::make('stephen123')
        ]);

        $adminRole = Role::create([
            'name' => 'admin'
        ]);
        Role::create([
            'name' => 'patient'
        ]);

       $admin->assignRole($adminRole);
    }
}
