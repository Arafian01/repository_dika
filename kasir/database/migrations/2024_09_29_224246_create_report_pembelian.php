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
        Schema::create('report_pembelian', function (Blueprint $table) {
            $table->id();
            $table->string('kode_pembelian');
            $table->string('tgl_pembelian');
            $table->string('id_supplier');
            $table->string('id_produk');
            $table->string('qty');
            $table->string('tottal_harga');
            $table->string('total_pembelian');
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
        Schema::dropIfExists('report_pembelian');
    }
};
