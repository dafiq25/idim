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
        Schema::create('pengguna', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_akses')->unsigned();
            $table->string('namaPengguna');
            $table->string('namaDepan');
            $table->string('namaBelakang');
            $table->string('password');
            $table->string('noHp');
            $table->string('alamat');

            $table->foreign('id_akses', 'fk_hakAkses')->references('id')->on('hakAkses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
