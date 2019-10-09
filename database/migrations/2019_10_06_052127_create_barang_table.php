<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        
        Schema::create('kondisi_barang', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode');
            $table->string('name','700');
            $table->timestamps();
        });

        Schema::create('kategori_barang', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode');
            $table->string('name','700');
            $table->unsignedBigInteger('id_master_akun');          
            $table->timestamps();            
            $table->foreign('id_master_akun')->references('id')->on('master_akun');
        });
    
        Schema::create('barang', function (Blueprint $table) {
            $table->bigIncrements('id');            
            $table->string('kode');
            $table->string('name','700');
            $table->string('satuan');
            $table->unsignedBigInteger('id_kategori_barang');
            $table->timestamps();
            $table->foreign('id_kategori_barang')->references('id')->on('kategori_barang');
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
        Schema::dropIfExists('kategori_barang');
        Schema::dropIfExists('kondisi_barang');
    }
}
