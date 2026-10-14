<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pesanan;

class PesananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pesanan::insert([
            ['nama_pelanggan' => 'Rudi', 'tanggal_masuk' => '2026-10-01', 'jumlah' => 3, 'total_biaya' => 18000, 'status' => 'selesai' , 'layanan_id' => 1],
            ['nama_pelanggan' => 'Dewi', 'tanggal_masuk' => '2026-10-08', 'jumlah' => 2, 'total_biaya' => 70000, 'status' => 'proses', 'layanan_id' => 3],
        ]);
    }
}
