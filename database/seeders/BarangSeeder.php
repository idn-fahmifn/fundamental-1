<?php

namespace Database\Seeders;

use App\Models\Barang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Barang::create([
            'nama_barang' => 'Sendal',
            'merek' => 'Swallow',
            'deskripsi_barang' => 'Sendal swallow untuk jalan jalan',
            'kategori' => 'padat'
        ]);
    }
}
