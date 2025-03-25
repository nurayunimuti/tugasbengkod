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
            'nama' => 'James',
            'alamat' => 'Indonesia',
            'no_hp' => '+62 000-0000-0000',
            'email' => 'Jamesabigail@yahoo.com',
            'password' => 'admin',
            'role' => 'pasien',
            'remember_token' => '-'
        ]);

        DB::connection('consultation')->table(('users'))->insert([
            'nama' => 'ElaineAbigail',
            'alamat' => 'Amerika',
            'no_hp' => '+77 000-0000-0000',
            'email' => 'Elaine@gmail.com',
            'password' => 'pass',
            'role' => 'dokter',
            'remember_token' => '-'
        ]);
    }
}