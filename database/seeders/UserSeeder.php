<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'nama' => 'Syifa',
                'alamat' => 'Indonesia',
                'no_hp' => '+888',
                'email' => 'Syifaangelica@gmail.com',
                'password' => 'Syifa',
                'role' => 'pasien',
                'remember_token' => 'false',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Elaine',
                'alamat' => 'Indonesia',
                'no_hp' => '+887',
                'email' => 'Elaine@gmail.com',
                'password' => 'Elaine',
                'role' => 'dokter',
                'remember_token' => 'false',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Abigail',
                'alamat' => 'Jakarta',
                'no_hp' => '08155',
                'email' => 'Abigail@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'pasien',
                'remember_token' => 'false',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Sean',
                'alamat' => 'Jakarta',
                'no_hp' => '08950',
                'email' => 'Sean@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'dokter',
                'remember_token' => 'false',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($users as $user) {
            User::firstOrCreate(
                ['nama' => $user['nama']],
                [
                    'alamat' => $user['alamat'], 
                    'no_hp' => $user['no_hp'],
                    'email' => $user['email'],
                    'password' => $user['password'],
                    'role' => $user['role'],
                    'remember_token' => $user['remember_token'],
                    'created_at' => $user['created_at'],
                    'updated_at' => $user['updated_at'],
                ]
            );
        }
    }
}