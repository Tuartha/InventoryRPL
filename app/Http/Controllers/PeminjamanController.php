<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Barang;
use App\Models\Laporan;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PeminjamanController extends Controller
{
    public function index() {
        $user = Auth::user();
        if ($user->user_type === 'admin') {
            $pengembalian = Peminjaman::where('status', 'dipinjam')->get(); 
        } else {
            $pengembalian = Peminjaman::where('users_id', $user->id)
                                    ->where('status', 'dipinjam')
                                    ->get();
        }
        return view('pengembalian', compact('pengembalian'));
    }

    public function sKembali() {
        $user = Auth::user();
        if ($user->user_type === 'admin') {
            $laporans = Peminjaman::where('status', 'dikembalikan')->get(); 
        } else {
            $laporans = Peminjaman::where('users_id', $user->id)
                                    ->where('status', 'dikembalikan')
                                    ->get();
        }
        return view('laporan', compact('laporans'));
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

    public function kembalikan($id) {
        try {
            $peminjaman = Peminjaman::findOrFail($id);
    
            // Pastikan status masih "dipinjam" (huruf kecil)
            if ($peminjaman->status !== "dipinjam") {
                return response()->json(['error' => 'Barang sudah dikembalikan sebelumnya!'], 400);
            }
    
            // Tambah stok barang kembali
            $barang = $peminjaman->barang;
            $barang->stock += $peminjaman->jumlah;
            $barang->save();
    
            // Ubah status peminjaman menjadi "dikembalikan"
            $peminjaman->status = "dikembalikan";
            $peminjaman->tanggal_kembali = Carbon::now();
            $peminjaman->save();
    
            return response()->json(['message' => 'Barang berhasil dikembalikan'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Terjadi kesalahan saat mengembalikan barang.'], 500);
        }
    }
}
