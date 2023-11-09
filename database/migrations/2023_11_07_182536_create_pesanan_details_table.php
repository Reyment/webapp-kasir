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
        if(!Schema::hasTable('pesanan_details')) {
            Schema::create('pesanan_details', function (Blueprint $table) {
                $table->id();
                $table->integer('id_order');
                $table->integer('id_produk');
                $table->integer('jumlah');
                $table->integer('sub_total');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanan_details');
    }
};
