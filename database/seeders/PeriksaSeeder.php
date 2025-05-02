<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use App\Models\User;
use App\Models\Periksa;

class PeriksaSeeder extends Seeder
{
    public function run(): void
    {
        $pasien = User::where('role', 'pasien')->first(); // Ambil pasien pertama
        $dokter1 = User::where('email', 'Elaine@gmail.com')->first();
        $dokter2 = User::where('email', 'Sean@gmail.com')->first();

        if ($pasien && $dokter1) {
            Periksa::create([
                'id_pasien' => $pasien->id,
                'id_dokter' => $dokter1->id,
                'tgl_periksa' => Carbon::now(),
                'catatan' => 'Tidak ada masalah.',
                'biaya_periksa' => 0,
            ]);
        }

        if ($pasien && $dokter2) {
            Periksa::create([
                'id_pasien' => $pasien->id,
                'id_dokter' => $dokter2->id,
                'tgl_periksa' => Carbon::now()->addDay(),
                'catatan' => 'Ucok Kena Tipes.',
                'biaya_periksa' => 0,
            ]);
        }
    }
}
