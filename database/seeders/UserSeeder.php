<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        DB::connection('consultation')->table(('users'))->insert([
            'nama' => 'Peri Keabadian',
            'alamat' => 'Rusia',
            'no_hp' => '+934 000-0000-0000',
            'email' => 'RUUTniBeban@gmail.com',
            'password' => 'admin',
            'role' => 'pasien',
            'remember_token' => '-'
        ]);

        DB::connection('consultation')->table(('users'))->insert([
            'nama' => 'SUNG JIN WO',
            'alamat' => 'Japan',
            'no_hp' => '+88 000-0000-0000',
            'email' => 'Jinwo@gmail.com',
            'password' => 'pass',
            'role' => 'dokter',
            'remember_token' => '-'
        ]);
    }
}