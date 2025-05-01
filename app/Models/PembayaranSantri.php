<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Santri;

class PembayaranSantri extends Model
{
    use HasFactory;
    protected $table = 'pembayaran';
    protected $fillable = [
        'santri_id',
        // 'bulan',
        // 'tahun',
        // 'tagihan',
        'dibayar',
    ];

    public function santri()
    {
        return $this->belongsTo(Santri::class, 'siswa_id', 'id');
    }
}
