<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('santri', function (Blueprint $table) {
            $table->id()->primary();
            $table->string("nik")->unique();
            $table->string("nama_santri");
            $table->enum('sekolah_umum', ['mts', 'smp', 'smk', 'ma'])->nullable();
            $table->string('sekolah_madrasah')->nullable();
            $table->enum("gender", ["laki-laki", "perempuan"]);
            $table->foreignId('wisma_id')->nullable()->constrained('wisma', 'id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('santri');
    }
};
