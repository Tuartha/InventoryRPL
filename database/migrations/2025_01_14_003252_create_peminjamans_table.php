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
        Schema::create('peminjamans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('barangs_id');
            $table->unsignedBigInteger('users_id');
            $table->integer('jumlah');
            $table->string('status');
            $table->timestamp('tanggal_pinjam');
            $table->timestamp('tanggal_kembali')->nullable();

            $table->foreign('barangs_id')->references('id')->on('barangs')->onDelete('cascade');
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjamans');
    }
};
