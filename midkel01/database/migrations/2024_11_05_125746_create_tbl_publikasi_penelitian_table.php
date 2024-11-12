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
        Schema::create('tbl_publikasi_penelitian', function (Blueprint $table) {
            $table->id();
            $table->integer('idpenelitian');
            $table->date('tgl_transaksi');
            $table->string('unit', 100);
            $table->integer('nasional');
            $table->integer('internasional');
            $table->integer('internasional_index');
            $table->integer('prosiding');
            $table->integer('seminar');
            $table->string('kategori', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_publikasi_penelitian');
    }
};
