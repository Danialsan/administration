<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Wisma;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Wisma
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
