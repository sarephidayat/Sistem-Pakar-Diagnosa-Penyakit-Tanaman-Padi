<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('master_rule', function (Blueprint $table) {
            $table->id('id_rule');
            $table->string('kode_rule')->unique();
            $table->unsignedBigInteger('id_penyakit'); // FK ke master_penyakit
            $table->timestamps();
            $table->foreign('id_penyakit')->references('id_penyakit')->on('master_penyakit')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('master_rule');
    }
};
