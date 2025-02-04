<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lokasi extends Model
{
    use HasFactory;
    public $timestamps = false; 
    protected $fillable = ['nama_lokasi', 'keterangan'];

    // Relasi one-to-many (1 tempat memiliki banyak barang)
    public function barang() {
        return $this->hasMany(Barang::class);
    }
}
