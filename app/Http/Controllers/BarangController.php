<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Lokasi;

class BarangController extends Controller
{
    public function loadAll() {
        $all = Barang::all();
        $lokasis = Lokasi::all();
        return view('/inventori', compact(['all', 'lokasis']));
    }

    // public function loadAddForm() {
    //     return view('/inventori');
    // }

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

            return redirect("/inventori")->with("success", "Barang Berhasil Ditambahkan");
        } catch (\Exception $e) {
            return redirect("/index")->with("fail", $e->getMessage());
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
            "nama_barang" => "required|string",
            "merk" => "required|string",
            "tahun_datang" => "required|string",
            "lokasi_id" => "required",
            "stock" => "required|integer"
        ]);

        try {
            $updateBarang = Barang::find($request->slug);
            if($updateBarang){
                $updateBarang->update([
                    "nama_barang" => $request->nama_barang,
                    "merk" => $request->merk,
                    "tahun_datang" => $request->tahun_datang,
                    "lokasi_id" => $request->lokasi_id,
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
