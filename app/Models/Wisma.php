<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wisma extends Model
{
    use HasFactory;
    protected $table = "Wisma";
    protected $fillable = [
        'nama_wisma',
        'singkatan',
        'pembayaran',
    ];
    public $timestamps = false;
}
