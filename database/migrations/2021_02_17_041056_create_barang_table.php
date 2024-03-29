<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->id();
            $table->string('kode_barang', 50);
            $table->unsignedBigInteger('produk_id');
            $table->string('nama_barang', 100);
            $table->string('satuan', 10);
            $table->double('harga_jual', 0, 0);
            $table->string('stok', 5);
            $table->timestamps();
            
            $table->foreign('produk_id')->references('id')->on('produk');
        });

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barang');
    }
}
