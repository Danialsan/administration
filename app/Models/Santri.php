<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Santri extends Model
{
    use HasFactory;
    protected $table = "santri";
    protected $fillable = [
        'nik',
        'nama_santri',
        'sekolah_umum',
        'sekolah_madrasah',
        'gender',
        'wisma_id'
    ];

    public function wisma()
    {
        return $this->belongsTo(Wisma::class);
    }

    public function perizinanSantri()
    {
        return $this->hasMany(PerizinanSantri::class);
    }

    public function pembayaranSantri()
    {
        return $this->hasMany(PembayaranSantri::class);
    }
}
