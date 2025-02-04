<?php

namespace Database\Seeders;

use App\Models\Lokasi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LokasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Lokasi::create([
            'nama_lokasi' => 'LAB RPL 1',
            'keterangan' => 'Gedung TI, lantai 2 ruangan no 2 dari timur'
        ]);

        Lokasi::create([
            'nama_lokasi' => 'LAB RPL 2',
            'keterangan' => 'Gedung TI, lantai 2 di sebelah timur tangga'
        ]);

        Lokasi::create([
            'nama_lokasi' => 'LAB RPL 3',
            'keterangan' => 'Gedung TI, lantai 2 di sebelah barat tangga'
        ]);

        Lokasi::create([
            'nama_lokasi' => 'RUANG GURU RPL',
            'keterangan' => 'Gedung TI, lantai 2 ruangan paling timur'
        ]);
    }
}
