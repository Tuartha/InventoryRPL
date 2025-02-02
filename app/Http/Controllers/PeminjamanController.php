<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Barang;
use App\Models\Peminjaman;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PeminjamanController extends Controller
{
    public function index() {
        $pengembalian = Peminjaman::all();
        return view('pengembalian', compact('pengembalian'));
    }

    public function create() {
        $user = Auth::user();
        $barangs = Barang::where('stock', '>', 0)->get();

        return view('peminjaman', compact('user', 'barangs'));
    }

    public function store(Request $request) {
        // dd($request->all());
        $request->validate([
            'barang_id' => 'required|exists:barangs,id',
            'jumlah' => 'required|integer|min:1',
        ]);
        // dd('Lolos Validasi');

        $barang = Barang::findOrFail($request->barang_id);
        if($barang->stock < $request->jumlah) {
            return back()->withErrors(['jumlah' => 'Jumlah peminjaman melebihi stok yang tersedia.']);
        }  

        $barang->stock -= $request->jumlah;
        $barang->save();

        $peminjaman = new Peminjaman;
        $peminjaman->barangs_id = $request->barang_id;
        $peminjaman->status ='dipinjam';
        $peminjaman->jumlah = $request->jumlah;
        $peminjaman->users_id = auth()->id();  // Asumsikan ada kolom user_id yang menyimpan peminjam
        $peminjaman->tanggal_pinjam = Carbon::now();
        $peminjaman->save();
        return redirect()->route('pengembalian')->with('success', 'Peminjaman berhasil ditambahkan.');
    }
}
