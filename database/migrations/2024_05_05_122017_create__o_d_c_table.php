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
        Schema::create('ODC', function (Blueprint $table) {
            $table->id('odc_id')->autoIncrement();
            $table->string('nama_odc', length: 50);
            $table->string('lokasi', length: 100);
            $table->string('kordinat', length: 100);
            $table->integer('slot_terpakai');
            $table->integer('port_terpakai');
            $table->integer('slot');
            $table->integer('sisa_slot');
            $table->integer('port');
            $table->integer('sisa_port');
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ODC');
    }
};
