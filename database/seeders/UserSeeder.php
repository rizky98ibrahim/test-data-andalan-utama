<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create Admin User
        User::create([
            'name' => 'Admin Data Utama',
            'username' => 'admin',
            'email' => 'admin@datautama.com',
            'phone_number' => '081770237779',
            'address' => 'Jalan Selomas Raya B-21, Panggung Lor, Kec. Semarang Utara, Kota Semarang, Jawa Tengan 50174',
            'place_of_birth' => 'Semarang',
            'date_of_birth' => '2022-01-01',
            'image' => 'https://www.datautama.com/assets/logo.33214868.png',
            'job' => 'IT & Telecommunication',
            'email_verified_at' => now(),
            'password' => bcrypt('admin'),
            'remember_token' => Str::random(10),
        ]);

        // Create User
        User::create([
            'name' => 'Muhammad Rizky Ibrahim',
            'username' => 'rizky98ibrahim',
            'email' => 'rizky98ibrahim@gmail.com',
            'phone_number' => '087808740020',
            'address' => 'Jl. Primadana VII Blok C8 No.28 RT.06/RW.10, Jatisari, Jatiasih, Kota Bekasi, Jawa Barat 17426',
            'place_of_birth' => 'Jakarta',
            'date_of_birth' => '1998-06-06',
            'image' => 'https://avatars.githubusercontent.com/u/113784671?v=4',
            'job' => 'Web Developer',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
        ]);

        // Create 10 Fake Users
        User::factory()->count(10)->create();
    }
}
