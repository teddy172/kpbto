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
        Schema::create('teknisi', function (Blueprint $table) {
            $table->id('teknisi_id')->autoIncrement();
            $table->String('nama', length: 50);
            $table->string('password', length: 50);
            $table->string('witel', length: 50);
            $table->integer('NIK')->unique();
            $table->string('nomer_telepon', length: 50);
            $table->string('zona_kerja', length: 50);
            $table->string('email', length: 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teknisi');
    }
};
