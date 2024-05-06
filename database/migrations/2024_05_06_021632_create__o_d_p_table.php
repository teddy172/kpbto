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
        Schema::create('ODP', function (Blueprint $table) {
            $table->id('odp_id')->autoIncrement();
            $table->string('nama_odp', length: 50);
            $table->unsignedBigInteger('odc_id');
            $table->string('lokasi', length: 100);
            $table->string('kordinat', length: 100);
            $table->integer('slot');
            $table->integer('sisa_slot');
            $table->integer('port');
            $table->integer('sisa_port');
            $table->string('status');
            $table->string('distribusi');
            $table->timestamps();
            
            $table->foreign('odc_id')->references('odc_id')->on('ODC');
        });
        // Schema::drop('ODP');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ODP');
    }
};
