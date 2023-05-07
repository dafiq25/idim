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
        Schema::create('pembelian', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_barang')->unsigned();
            $table->integer('id_supplier')->unsigned();
            $table->integer('jumlah_pembelian');
            $table->integer('harga_beli');
            $table->boolean('status')->default(1);

            $table->foreign('id_barang', 'fk_barang_beli')->references('id')->on('barang');
            $table->foreign('id_supplier', 'fk_supplier')->references('id')->on('supplier');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembelian');
    }
};
