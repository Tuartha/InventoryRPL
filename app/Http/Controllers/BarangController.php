<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Lokasi;

class BarangController extends Controller
{
    public function loadAll(Request $request) {
        $all =  Barang::with('lokasi')->get();
        $lokasis = Lokasi::all();
        if($request->ajax()) {
            return response()->json([
                "data" => $all,
                "lokasis" => $lokasis
            ]);
        }
        return view('/inventori', compact(['all', 'lokasis']));
    }

    public function addForm(Request $request) {
        $request->validate([
            "nama_barang" => "required|string",
            "merk" => "required|string",
            "tahun_datang" => "required|string",
            "lokasi_id" => "required",
            "stock" => "required|integer"
        ]);

        try {
            $slug = Str::slug($request->nama_barang . '-' . time());

            $newBarang = new Barang;
            $newBarang-> nama_barang = $request->nama_barang;
            $newBarang->merk = $request->merk;
            $newBarang->tahun_datang = $request->tahun_datang;
            $newBarang->lokasi_id = $request->lokasi_id;
            $newBarang->stock = $request->stock;
            $newBarang->slug = $slug;
            $newBarang->save();

            return response()->json([
                'status' => 'success',
                'message' => 'Barang berhasil ditambahkan!'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'fail',
                'message' => 'Terjadi kesalahan saat menambahkan barang: ' . $e->getMessage()
            ]);
        }
    }

    public function editForm(Request $request) {
        $request->validate([
            "up_nama_barang" => "required|string",
            "up_merk" => "required|string",
            "up_tahun_datang" => "required|string",
            "up_lokasi_id" => "required|exists:lokasis,id",
            "up_stock" => "required|integer"
        ]);

        try {
            $updateBarang = Barang::where('slug', $request->up_slug)->first();
            if($updateBarang){
                $updateBarang->update([
                    "nama_barang" => $request->up_nama_barang,
                    "merk" => $request->up_merk,
                    "tahun_datang" => $request->up_tahun_datang,
                    "lokasi_id" => $request->up_lokasi_id,
                    "stock" => $request->up_stock,
                    "slug" => Str::slug($request->up_nama_barang . '-' . time()),
                ]);
                return response()->json([
                    'status' => 'success',
                    'message' => $updateBarang->up_nama_barang . ' berhasil diubah!'
                ]);
            } else {
                return response()->json([
                    'status' => 'fail',
                    'message' => 'Barang tidak ditemukan!'
                ], 404);
            }
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'fail',
                'message' => 'Terjadi kesalahan saat mengupdate barang: ' . $e->getMessage()
            ], 500);
        }
    }

    public function deleteBarang(Request $request) {
        // Ambil slug barang dari request
        $slug = $request->input('barang_slug');

        // Cari barang berdasarkan slug
        $barang = Barang::where('slug', $slug)->first();

        if (!$barang) {
            return response()->json([
                'status' => 'fail',
                'message' => 'Barang tidak ditemukan!'
            ]);
        }

        // Hapus barang dari database
        $barang->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Barang berhasil dihapus'
        ]);
    }
}
