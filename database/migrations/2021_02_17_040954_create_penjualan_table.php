<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenjualanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjualan', function (Blueprint $table) {
            $table->id();
            $table->string('no_fakur', 50);
            $table->date('tgl_faktur');
            $table->double('total_bayar', 0, 0);
            $table->unsignedBigInteger('pelanggan_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('pelanggan_id')->references('id')->on('pelanggan');
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
        Schema::dropIfExists('penjualan');
    }
}
