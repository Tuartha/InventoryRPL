<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Barang extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        "nama_barang",
        "merk",
        "lokasi_id",
        "tahun_datang",
        "stock",
        "slug"
    ];

    public function lokasi() {
        return $this->belongsTo(Lokasi::class);
    }

    public function peminjaman() {
        return $this->hasMany(Peminjaman::class, 'barangs_id');
    }

    protected static function boot() {
        parent::boot();
        static::creating(function ($barang) {
            $barang->slug = Str::slug($barang->nama_barang . '-' . time());
        });
    }
}
