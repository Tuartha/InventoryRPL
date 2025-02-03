<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Peminjaman;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $totalBarang = Barang::sum("stock");
        $totalPeminjaman = Peminjaman::where('status', 'dipinjam')->get();
        $peminjaman = Peminjaman::where('status', 'dipinjam')->count();
        $pengembalian = Peminjaman::where('status', 'dikembalikan')
            ->whereDate('tanggal_pinjam', Carbon::today())
            ->count();

        return view('index', [
            'totalBarang' => $totalBarang,
            'totalPeminjaman' => $totalPeminjaman,
            'peminjaman' => $peminjaman,
            'pengembalian' => $pengembalian
        ]);
    }
}
