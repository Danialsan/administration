<?php

namespace Database\Seeders;

use App\Models\Wisma;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WismaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lba = Wisma::create([
            'nama_wisma' => 'lembaga bahasa arab',
            'singkatan' => 'lba',
            'pembayaran' => 50000
        ]);

        $lbi = Wisma::create([
            'nama_wisma' => 'lembaga bahasa inggris',
            'singkatan' => 'lbi',
            'pembayaran' => 50000
        ]);
    }
}
