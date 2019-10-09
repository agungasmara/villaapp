<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    //Handle lokasi dan sub lokasi
    public function up()
    {
        Schema::create('property', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode')->nullable();
            $table->string('name','700');
            $table->timestamps();
        });
        Schema::create('sub_property', function (Blueprint $table) {
            $table->bigIncrements('id');            
            $table->string('kode')->nullable();
            $table->string('name','700');
            $table->unsignedBigInteger('id_property')->nullable();
            $table->timestamps();            
            $table->foreign('id_property')->references('id')->on('property');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_property');
        Schema::dropIfExists('property');
    }
}
