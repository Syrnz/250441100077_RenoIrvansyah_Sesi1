<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Layanan;

class LayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Layanan::insert([
            ['kode_layanan' => 'LK-001' ,'nama_layanan' => 'Cuci Kering', 'jenis' => 'kiloan', 'tarif_per_satuan' => 6000],
            ['kode_layanan' => 'LK-002' ,'nama_layanan' => 'Cuci Setrika', 'jenis' => 'kiloan', 'tarif_per_satuan' => 8000],
            ['kode_layanan' => 'LS-001' ,'nama_layanan' => 'Bed Cover', 'jenis' => 'satuan', 'tarif_per_satuan' => 35000],
            ['kode_layanan' => 'LS-002' ,'nama_layanan' => 'Jas', 'jenis' => 'satuan', 'tarif_per_satuan' => 40000],
        ]);
    }
}
