<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Barang extends Model
{
    use HasFactory;
    protected $fillable = [
        "Kode_Barang",
        "Nama_Barang",
        "Merk",
        "Tahun_Datang",
        "Kondisi_Barang",
        "Stock",
        "slug"
    ];

    public function lokasi() {
        return $this->belongsTo(Lokasi::class);
    }

    public function peminjaman() {
        return $this->belongsTo(Peminjaman::class);
    }

    protected static function boot() {
        parent::boot();

        static::saving(function ($barang) {
            $barang->slug = Str::slug($barang->Nama_Barang, '-');
        });
    }
}
