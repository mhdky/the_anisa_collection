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
        Schema::create('store_information', function (Blueprint $table) {
            $table->id();
            $table->string('name_bank_account');
            $table->string('bank_name');
            $table->string('rekening_number');
            $table->string('bank_code');
            $table->string('store_address');
            $table->string('phone_number');
            $table->string('store_email');
            $table->string('instagram')->nullable();
            $table->string('facebook')->nullable();
            $table->string('open');
            $table->string('close');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('store_information');
    }
};
