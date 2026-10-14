<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\layanan;

class pesanan extends Model
{
    use HasFactory;
    protected $fillable = [
        'layanan_id',
        'nama_pelanggan',
        'tanggal_masuk',
        'jumlah',
        'total_biaya',
        'status',
    ];

    public function layanan()
    {
        return $this->belongsTo(layanan::class);
    }
}
