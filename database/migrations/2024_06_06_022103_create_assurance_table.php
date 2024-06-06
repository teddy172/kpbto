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
        Schema::create('assurance', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('teknisi_id');
            $table->string('nama_pelanggan', length: 50);
            $table->string('alamat', length: 50);
            $table->string('no_telepon', length: 50);
            $table->string('no_internet', length: 50);
            $table->string('keluhan', length: 100);
            $table->time('teknisi_berangkat');
            $table->time('teknisi_tiba');
            $table->time('waktu_estimasi');
            $table->string('status');
            $table->timestamps();

            $table->foreign('teknisi_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assurance');
    }
};
