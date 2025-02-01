<?php

namespace App\Http\Controllers;
use App\Models\Lokasi;

use Illuminate\Http\Request;

class LokasiController extends Controller
{
    public function getLokasiName(Request $request)
    {
        $lokasiId = $request->input('lokasi_id');
        $lokasi = Lokasi::find($lokasiId); // Menemukan lokasi berdasarkan ID

        if ($lokasi) {
            return response()->json(['nama_lokasi' => $lokasi->nama_lokasi]);
        } else {
            return response()->json(['error' => 'Lokasi tidak ditemukan'], 404);
        }
    }

    public function create() {
        // Ambil semua data lokasi
        $lokasis = Lokasi::all();
        return view('/profile/partials/add_form', compact('lokasis'));
    }
}
