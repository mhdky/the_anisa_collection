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
        Schema::create('shippings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('city_id');
            $table->foreignId('province_id');
            $table->string('kecamatan');
            $table->string('email_penerima');
            $table->string('nama_penerima');
            $table->string('alamat_penerima');
            $table->integer('code_pos');
            $table->string('nohp_penerima');
            $table->string('pesan_penerima');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shippings');
    }
};
