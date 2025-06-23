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
        Schema::create('term_index', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pasal_id')->constrained('pasal')->onDelete('cascade');
            $table->string('term'); // kata dasar
            $table->float('tfidf'); // bobot TF-IDF
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('term_index');
    }
};
