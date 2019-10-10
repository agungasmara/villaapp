<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubPropertySoptindakanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subproperty_soptindakan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_sub_property')->nullable();
            $table->unsignedBigInteger('id_sop_detail_tindakan')->nullable();
            $table->boolean('check_list')->default(false);
            $table->string('keterangan','700')->nullable();
            $table->timestamps();            
            $table->foreign('id_sub_property')->references('id')->on('sub_property');
            $table->foreign('id_sop_detail_tindakan')->references('id')->on('sop_detail_tindakan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subproperty_soptindakan');
    }
}
