<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function loadAll() {
        $all = Barang::all();
        return view('/', compact('all'));
    }

    public function loadAddForm() {
        return view('/addForm');
    }

    public function addForm(Request $request) {
        $request->validate([
            "kode_barang" =>  ["required", "string", "regex:/^[A-Z]{2}[0-9]{2}$/"],
            "nama_barang" => "required|string",
            "merk" => "required|string",
            "tahun_datang" => "required|string",
            "lokasi_id" => "required",
            "kondisi_barang" => "required|string",
            "stock" => "required|integer"
        ], [
            // Pesan error kustom
            "kode_barang.regex" => "Kode Barang harus berupa 2 huruf kapital diikuti oleh 2 angka."
        ]);

        try {
            $newBarang = new Barang;
            $newBarang->kode_barang = $request->kode_barang;
            $newBarang-> nama_barang = $request->nama_barang;
            $newBarang->merk = $request->merk;
            $newBarang->tahun_datang = $request->tahun_datang;
            $newBarang->lokasi_id = $request->lokasi_id;
            $newBarang->kondisi_barang = $request->kondisi_barang;
            $newBarang->stock = $request->stock;
            $newBarang->save();

            return redirect("/")->with("success", "Barang Berhasil Ditambahkan");
        } catch (\Exception $e) {
            return redirect("/")->with("fail", $e->getMessage());
        }
    }

    public function loadEditForm($slug) {
        $brg = Barang::find($slug);
        if (!$brg) {
            return redirect('/')->with('fail', 'Barang tidak ditemukan!');
        }
        return view("/editForm", compact('brg'));
    }

    public function editForm(Request $request) {
        $request->validate([
            "kode_barang" =>  ["required", "string", "regex:/^[A-Z]{2}[0-9]{2}$/"],
            "nama_barang" => "required|string",
            "merk" => "required|string",
            "tahun_datang" => "required|string",
            "lokasi_id" => "required",
            "kondisi_barang" => "required|string",
            "stock" => "required|integer"
        ], [
            // Pesan error kustom
            "kode_barang.regex" => "Kode Barang harus berupa 2 huruf kapital diikuti oleh 2 angka."
        ]);

        try {
            $updateBarang = Barang::find($request->slug);
            if($updateBarang){
                $updateBarang->update([
                    "kode_barang" => $request->kode_barang,
                    "nama_barang" => $request->nama_barang,
                    "merk" => $request->merk,
                    "tahun_datang" => $request->tahun_datang,
                    "lokasi_id" => $request->lokasi_id,
                    "kondisi_barang" => $request->kondisi_barang,
                    "stock" => $request->stock,
                    "slug" => Str::slug($request->nama_barang, '-'),
                ]);
                return redirect('/')->with('success', $updateBarang->nama_barang . "Berhasil Diubah");
            } else {
                return redirect('/editForm')->with('fail', "Barang Tidak Ditemukan!");
            }
        } catch (\Exception $e) {
            return redirect("/")->with("fail", $e->getMessage());
        }
    }

    public function deleteBarang($slug) {
        try {
            Barang::where('slug', $slug)->delete();
            return redirect("/")->with("success", "Barang Berhasil Dihapus");
        } catch (\Exception $e) {
            return redirect("/")->with("fail", $e->getMessage());
        }
    }
}
