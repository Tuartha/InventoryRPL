<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $fillable =  [
        'status',
        'tanggal_pinjam',
        'tanggal_kembali'
    ];

    public function barang() {
        return $this->hasMany(Barang::class);
    }
    public function user() {
        return $this->belongsTo(User::class);
    }
}
