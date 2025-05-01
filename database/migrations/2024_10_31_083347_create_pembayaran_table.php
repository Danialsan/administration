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
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id();
            $table->foreignId('santri_id')->constrained('santri', 'id')->onDelete('cascade');
            // $table->unsignedTinyInteger('bulan');
            // $table->year('tahun');
            // $table->decimal('tagihan', 10, 2);
            // $table->foreignId('wisma_id')->constrained('wisma', 'id');
            $table->integer('dibayar')->default(0);
            $table->timestamps();

            // $table->unique(['santri_id', 'bulan', 'tahun']);
            $table->unique(['santri_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayaran');
    }
};
