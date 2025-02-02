<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    public $timestamps = false; 
    protected $table = 'peminjamans';
    protected $fillable =  [
        'jumlah',
        'status',
        'tanggal_pinjam',
        'tanggal_kembali'
    ];

    public function barang() {
        return $this->belongsTo(Barang::class, 'barangs_id');
    }
    public function user() {
        return $this->belongsTo(User::class, 'users_id');
    }
}
