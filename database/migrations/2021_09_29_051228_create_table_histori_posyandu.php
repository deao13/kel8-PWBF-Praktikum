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
            $table->date('tgl_posyandu');
            $table->float('bb_balita');
            $table->float('tb_balita');
            $table->timestamps();

            
            // $table->integer('id_balita')->unsigned();
            // $table->foreign('id_balita')->references('id')->on('table_balita');
        });

        Schema::table('table_histori_posyandu', function (Blueprint $table) {
            $table->foreignId('id_balita')->constrained('table_balita');
            // $table->foreignId('id_pengurus')->constrained('pengurus');
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
