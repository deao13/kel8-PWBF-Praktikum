<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableHistoriPosyandu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_histori_posyandu', function (Blueprint $table) {
            $table->id();
            $table->integer('id_histori');
            $table->date('tgl_posyandu');
            $table->float('bb_balita');
            $table->float('tb_balita');
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
        Schema::dropIfExists('table_histori_posyandu');
    }
}
