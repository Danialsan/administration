<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerizinanSantri extends Model
{
    use HasFactory;
    protected $table = 'perizinan';
    protected $fillable = [
        'no_surat',
        'jenis_surat',
        'santri_id'
    ];

    public function santri()
    {
        return $this->belongsTo(Santri::class);
    }
}
