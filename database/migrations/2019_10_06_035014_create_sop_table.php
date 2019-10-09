<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSopTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sop', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode')->nullable();
            $table->string('nama_prosedur','500')->nullable();
            $table->string('rutin','500')->nullable();
            $table->string('rutinitas','500')->nullable();
            $table->integer('no_urut')->nullable();
            $table->string('konfirmasi','500')->nullable();
            $table->timestamps();
        });
        Schema::create('sop_detail', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode')->nullable();
            $table->string('keterangan','700')->nullable();
            $table->unsignedBigInteger('id_sop')->nullable();
            $table->integer('no_urut')->nullable();
            $table->timestamps();
            $table->foreign('id_sop')->references('id')->on('sop');
        });
        Schema::create('sop_detail_tindakan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode')->nullable();
            $table->string('keterangan','700')->nullable();
            $table->unsignedBigInteger('id_sop_detail')->nullable();
            $table->integer('no_urut')->nullable();
            $table->timestamps();
            $table->foreign('id_sop_detail')->references('id')->on('sop_detail');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::dropIfExists('sop_detail_tindakan');
        Schema::dropIfExists('sop_detail');
        Schema::dropIfExists('sop');
    }
}
