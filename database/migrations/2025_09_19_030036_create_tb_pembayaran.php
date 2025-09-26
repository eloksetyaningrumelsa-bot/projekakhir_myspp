<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tb_pembayaran', function (Blueprint $table) {
            $table->id(); // primary key auto_increment
            $table->string('nama');
            $table->string('tagihan');
            $table->date('tanggal_pembayaran'); // pakai date atau datetime tanpa (255)
            $table->integer('jumlah_bayar'); // cukup integer, jangan auto_increment
            $table->enum('status', ['Lunas', 'Belum Lunas'])->default('Lunas');// cukup integer, jangan auto_increment

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tb_pembayaran');
    }
};
