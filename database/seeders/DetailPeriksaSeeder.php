<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailPeriksaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ambil data pertama dari tabel periksas dan obats
        $periksa = DB::table('periksas')->first();
        $obat = DB::table('obats')->first();

        // Cek apakah kedua data tersebut ada sebelum melakukan insert
        if ($periksa && $obat) {
            DB::table('detail_periksas')->insert([
                'id_periksa' => $periksa->id,
                'id_obat' => $obat->id,
            ]);
        } else {
            // Tampilkan pesan ke konsol jika data tidak ditemukan
            $this->command->warn('Tidak dapat menambahkan detail_periksas karena periksa atau obat belum tersedia.');
        }
    }
}
