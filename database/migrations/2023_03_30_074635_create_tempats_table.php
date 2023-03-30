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
        Schema::create('tempats', function (Blueprint $table) {
            $table->id();
            $table->string('nama_tempat');
            $table->string('alamat');
            $table->time('opening_time')->nullable();
            $table->time('closing_time')->nullable();
            $table->longText('list_harga');
            $table->longText('keterangan');
            $table->string('gambar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tempats');
    }
};
