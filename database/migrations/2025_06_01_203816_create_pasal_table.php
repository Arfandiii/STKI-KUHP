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
        Schema::create('pasal', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bab_id')->constrained('bab')->cascadeOnDelete();
            $table->string('nomor_pasal');
            $table->text('isi_pasal')->nullable();
            $table->text('vector')->nullable();
            $table->timestamps();

            // Unik per bab: tidak boleh ada nomor_pasal yang sama dalam satu bab
            $table->unique(['bab_id', 'nomor_pasal']);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasal');
    }
};
