<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Periksa;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PasienController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $pasien_name = $user->nama;
        $riwayats = Periksa::where('id_pasien', $user->id)->get();
        $banyak_riwayat = $riwayats->count();

        return view('pasien.dashboard', compact('banyak_riwayat', 'pasien_name'));
    }

    public function makeAppointment()
    {
        $dokters = User::where('role', 'dokter')->get();
        $pasien_name = Auth::user()->nama;

        return view('pasien.periksa', compact('dokters', 'pasien_name'));
    }

    public function showRiwayat()
    {
        $user = Auth::user();
        $riwayats = Periksa::where('id_pasien', $user->id)
                    ->orderBy('tgl_periksa', 'desc')
                    ->get();
        $pasien_name = $user->nama;

        return view('pasien.riwayat', compact('riwayats', 'pasien_name'));
    }

    public function submitAppointment(Request $request)
    {
        Periksa::create([
            'id_pasien' => Auth::user()->id,
            'id_dokter' => $request->input('id_dokter'),
            'tgl_periksa' => $request->input('tgl_periksa'),
            'catatan' => '',
            'biaya_periksa' => '0'
        ]);

        return redirect()->route('pasien-riwayat');
    }
}
