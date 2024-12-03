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
        "Letak_Barang",
        "Kondisi_Barang",
        "Stock",
        "slug"
    ];

    protected static function boot() {
        parent::boot();

        static::saving(function ($barang) {
            $barang->slug = Str::slug($barang->Nama_Barang, '-');
        });
    }
}
