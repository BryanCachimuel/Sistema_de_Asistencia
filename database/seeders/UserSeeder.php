<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */


    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('123456789'),
            'fecha_ingreso' => now(),
            'estado' => '1',
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Silvana Armmas',
            'email' => 'silvanaarmas@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('123456789'),
            'fecha_ingreso' => now(),
            'estado' => '1',
            'remember_token' => Str::random(10),
        ]);
    }
}
