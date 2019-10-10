<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserPropertyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    //Handle lokasi dan sub lokasi
    public function up()
    {
        Schema::create('user_property', function (Blueprint $table) {
            $table->bigIncrements('id');      
            $table->unsignedBigInteger('id_user')->nullable();
            $table->unsignedBigInteger('id_property')->nullable();                  
            $table->string('keterangan','700')->nullable();
            $table->timestamps();            
            $table->foreign('id_user')->references('id')->on('users');
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
        Schema::dropIfExists('user_property');
    }
}
