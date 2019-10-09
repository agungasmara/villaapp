<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMasterAkunTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        Schema::create('master_akun', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode');
            $table->string('main_akun','700');
            $table->string('sub_akun','700');
            $table->string('keterangan','700');
            $table->string('debet_kredit','700');
            $table->string('jenis_akun','700');
            $table->string('no_urut','700');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('master_akun');
    }
}
