<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\pesanan;

class layanan extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode_layanan',
        'nama_layanan',
        'jenis',
        'tarif_per_satuan',
    ];

    public function pesanan()
    {
        return $this->hasMany(pesanan::class);
    }
}
