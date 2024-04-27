<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@ppl.id',
            'password' => bcrypt('12345678'),
        ]);

        $admin->assignRole('admin');

        $user = User::create([
            'name' => 'lembaga',
            'email' => 'lembaga@ppl.id',
            'password' => bcrypt('12345678'),
        ]);

        $user->assignRole('lembaga');

        $user = User::create([
            'name' => 'petani',
            'email' => 'petani@ppl.id',
            'password' => bcrypt('12345678'),
        ]);

        $user->assignRole('petani');
    }
}
