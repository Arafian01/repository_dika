<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('konsinyasiproduk', function (Blueprint $table) {
            $table->id();
            $table->string('id_konsinyasi');
            $table->string('id_produk');
            $table->string('stok');
            $table->string('tgl_konsinyasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('konsinyasiproduk');
    }
};
