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
                'nama' => 'Ucok',
                'alamat' => 'Rusia',
                'no_hp' => '+934 000-0000-0000',
                'email' => 'RUUTnibeban@gmail.com',
                'password' => 'Ucok',
                'role' => 'pasien',
                'remember_token' => 'false',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Sung Jin Owi',
                'alamat' => 'Japan',
                'no_hp' => '+88 000-0000-0000',
                'email' => 'Jinwo@gmail.com',
                'password' => 'jinwo',
                'role' => 'dokter',
                'remember_token' => 'false',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Jilong',
                'alamat' => 'Len op Don',
                'no_hp' => '081277770',
                'email' => 'jilong.dokter@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'pasien',
                'remember_token' => 'false',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'dr. Fani',
                'alamat' => 'Bandung',
                'no_hp' => '08955553210',
                'email' => 'fani.dokter@gmail.com',
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