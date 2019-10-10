<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventory', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode');
            $table->string('nama','700');
            $table->unsignedBigInteger('jumlah');
            $table->unsignedBigInteger('harga_beli');
            $table->date('tanggal_perolehan');
            $table->string('merek','700');
            $table->unsignedBigInteger('penyusutan_bulan');
            $table->unsignedBigInteger('id_supplier');
            $table->unsignedBigInteger('id_subproperty');
            $table->unsignedBigInteger('id_kondisi_barang');
            $table->unsignedBigInteger('id_user');
            $table->timestamps();
            
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_supplier')->references('id')->on('supplier');
            $table->foreign('id_subproperty')->references('id')->on('sub_property');
            $table->foreign('id_kondisi_barang')->references('id')->on('kondisi_barang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventory');
    }
}
