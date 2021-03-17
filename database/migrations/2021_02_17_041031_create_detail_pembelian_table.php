<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailPembelianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_pembelian', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pembelian_id');
            $table->unsignedBigInteger('barang_id');
            $table->double('harga_beli', 0, 0);
            $table->integer('jumlah');
            $table->double('sub_total', 0, 0);
            $table->timestamps();

            $table->foreign('pembelian_id')->references('id')->on('pembelian');
            $table->foreign('barang_id')->references('id')->on('barang');
        });

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_pembelian');
    }
}
