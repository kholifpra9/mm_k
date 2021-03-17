<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembelianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembelian', function (Blueprint $table) {
            $table->id();
            $table->string('kode_masuk', 50);
            $table->date('tgl_masuk');
            $table->double('total',0,0);
            $table->unsignedBigInteger('id_pemasok');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('id_pemasok')->references('id')->on('pemasok');
            $table->foreign('user_id')->references('id')->on('users');
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
}
