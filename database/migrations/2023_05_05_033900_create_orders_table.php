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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('shipping_id')->nullable();
            $table->string('url');
            $table->string('status');
            $table->integer('total_price');
            $table->integer('ongkos_kirim_pembeli')->default(0);
            $table->integer('total_amount');
            $table->string('kota_pembeli')->nullable();
            $table->string('provinsi_pembeli')->nullable();
            $table->string('kecamatan_pembeli')->nullable();
            $table->string('email_pembeli')->nullable();
            $table->string('nama_pembeli')->nullable();
            $table->string('alamat_pembeli')->nullable();
            $table->integer('kode_pos_pembeli')->nullable();
            $table->string('nohp_pembeli')->nullable();
            $table->string('pesan_pembeli')->nullable();
            $table->string('url_pembayaran')->nullable();
            $table->date('tanggal_pembayaran')->nullable();
            $table->string('nama_akun_bank')->nullable();
            $table->string('nama_bank')->nullable();
            $table->string('jumlah_transfer')->nullable();
            $table->string('gambar_bukti_pembayaran')->nullable();
            $table->integer('status_pembayaran')->default(0);
            $table->string('nomor_resi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
