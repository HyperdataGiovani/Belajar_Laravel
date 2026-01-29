<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'username' => 'yuta-okkotsu',
            'name' => 'Yuta Okkotsu',
            'email' => 'yuta@jujutsu.com',
            'email_verified_at' => now(),
            'password' => Hash::make('rika'),
            'remember_token' => Str::random(10)
        ]);
        User::create([
            'username' => 'maki-zenin',
            'name' => 'Maki Zenin',
            'email' => 'maki@jujutsu.com',
            'email_verified_at' => now(),
            'password' => Hash::make('surgawi'),
            'remember_token' => Str::random(10)
        ]);
        User::create([
            'username' => 'gojo-satoru',
            'name' => 'Gojo Satoru',
            'email' => 'gojo@jujutsu.com',
            'email_verified_at' => now(),
            'password' => Hash::make('sixeyes'),
            'remember_token' => Str::random(10)
        ]);
        User::create([
            'username' => 'sukuna',
            'name' => 'Sukuna',
            'email' => 'sukuna@jujutsu.com',
            'email_verified_at' => now(),
            'password' => Hash::make('dismantle'),
            'remember_token' => Str::random(10)
        ]);
        User::create([
            'username' => 'mahoraga',
            'name' => 'Mahoraga',
            'email' => 'mahoraga@jujutsu.com',
            'email_verified_at' => now(),
            'password' => Hash::make('siladivine'),
            'remember_token' => Str::random(10)
        ]);
    }
}