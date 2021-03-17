<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTampungBayarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tampung_bayar', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('penjualan_id');
            $table->double('total',0,0);
            $table->double('terima',0,0);
            $table->double('kembali',0,0);
            $table->timestamps();

            $table->foreign('penjualan_id')->references('id')->on('penjualan');
        });

       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tampung_bayar');
    }
}
