<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLichSuMuaCreditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lich_su_mua_credits', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nguoi_choi_id')->unsigned();
            $table->foreign('nguoi_choi_id')->references('id')->on('nguoi_chois');
            $table->integer('goi_credit_id')->unsigned();
            $table->foreign('goi_credit_id')->references('id')->on('goi_credits');
            $table->integer('credit');
            $table->integer('so_tien');
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
        Schema::dropIfExists('lich_su_mua_credits');
    }
}
