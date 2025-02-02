<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Peminjaman;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $totalBarang = Barang::sum("stock");
        $peminjaman = Peminjaman::where('status', 'dipinjam')->count();

        return view('index', [
            'totalBarang' => $totalBarang,
            'peminjaman' => $peminjaman,
        ]);
    }
}
