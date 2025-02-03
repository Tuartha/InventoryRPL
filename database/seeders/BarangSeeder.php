<?php

namespace Database\Seeders;

use App\Models\Barang;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Barang::create([
            'nama_barang' => 'Laptop',
            'merk' => 'Acer',
            'tahun_datang' => '2023',
            'lokasi_id' => 3,
            'stock' => 12,
        ]);

        Barang::create([
            'nama_barang' => 'Proyektor',
            'merk' => 'BenQ',
            'tahun_datang' => '2024',
            'lokasi_id' => 4,
            'stock' => 12,
        ]);
    }
}
