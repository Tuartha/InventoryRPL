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
            "Kode_Barang" =>  ["required", "string", "regex:/^[A-Z]{2}[0-9]{2}$/"],
            "Nama_Barang" => "required|string",
            "Letak_Barang" => "required|string",
            "Kondisi_Barang" => "required|string",
            "Stock" => "required|integer"
        ], [
            // Pesan error kustom
            "Kode_Barang.regex" => "Kode Barang harus berupa 2 huruf kapital diikuti oleh 2 angka."
        ]);

        try {
            $newBarang = new Barang;
            $newBarang->Kode_Barang = $request->Kode_Barang;
            $newBarang-> Nama_Barang = $request->Nama_Barang;
            $newBarang->Letak_Barang = $request->Letak_Barang;
            $newBarang->Kondisi_Barang = $request->Kondisi_Barang;
            $newBarang->Stock = $request->Stock;
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
            "Kode_Barang" =>  ["required", "string", "regex:/^[A-Z]{2}[0-9]{2}$/"],
            "Nama_Barang" => "required|string",
            "Letak_Barang" => "required|string",
            "Kondisi_Barang" => "required|string",
            "Stock" => "required|integer"
        ], [
            // Pesan error kustom
            "Kode_Barang.regex" => "Kode Barang harus berupa 2 huruf kapital diikuti oleh 2 angka."
        ]);

        try {
            $updateBarang = Barang::find($request->slug);
            if($updateBarang){
                $updateBarang->update([
                    "Kode_Barang" => $request->Kode_Barang,
                    "Nama_Barang" => $request->Nama_Barang,
                    "Letak_Barang" => $request->Letak_Barang,
                    "Kondisi_Barang" => $request->Kondisi_Barang,
                    "Stock" => $request->Stock,
                    "slug" => Str::slug($request->Nama_Barang, '-'),
                ]);
                return redirect('/')->with('success', $updateBarang->Nama_Barang . "Berhasil Diubah");
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
