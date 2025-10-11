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
        Schema::create('detail_gejala', function (Blueprint $table) {
            $table->id('id_detail_gejala');
            $table->unsignedBigInteger('id_rule');   // FK ke master_rule
            $table->unsignedBigInteger('id_gejala'); // FK ke master_gejala
            $table->unsignedBigInteger('id_status'); // FK ke master_gejala
            $table->decimal('bobot', 3, 2)->nullable(); // opsional: tingkat kepastian
            $table->timestamps();
            $table->integer('deleted')->default(0);

            $table->foreign('id_rule')->references('id_rule')->on('master_rule')->onDelete('cascade');
            $table->foreign('id_gejala')->references('id_gejala')->on('master_gejala')->onDelete('cascade');
            $table->foreign('id_status')->references('id_status')->on('master_status')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_gejala');
    }
};
