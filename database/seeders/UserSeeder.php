<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'kirakira4141',
            'email' => 'kirakira4141@gmail.com',
            'password' => 'kirakira4141',
        ]);

        User::create([
            'name' => 'stranded',
            'email' => 'stranded@gmail.com',
            'password' => 'stranded@gmail.com',
        ]);

        User::create([
            'name' => 'cannot be impersonated',
            'email' => 'cannot_be_impersonated@gmail.com',
            'password' => 'cannot_be_impersonated@gmail.com',
        ]);

        User::create([
            'name' => 'cannot impersonate',
            'email' => 'cannot_impersonate@gmail.com',
            'password' => 'cannot_impersonate@gmail.com',
        ]);
    }
}
