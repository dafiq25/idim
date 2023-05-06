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
        Schema::create('penjualan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_barang')->unsigned();
            $table->integer('id_pelanggan')->unsigned();
            $table->integer('jumlah_penjualan');
            $table->integer('harga_jual');
            
            $table->foreign('id_barang', 'fk_barang_jual')->references('id')->on('barang');
            $table->foreign('id_pelanggan', 'fk_pelanggan')->references('id')->on('pelanggan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penjualan');
    }
};
