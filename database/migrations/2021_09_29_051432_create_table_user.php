<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_user', function (Blueprint $table) {
            $table->id();
            $table->string('username',50);
            $table->string('password',8);
            $table->timestamps();

            
            // $table->integer('id_histori_posyandu')->unsigned();
            // $table->foreign('id_histori_posyandu')->references('id')->on('table_histori_posyandu');
        });

        Schema::table('table_user', function (Blueprint $table) {
            $table->foreignId('id_histori_posyandu')->constrained('table_histori_posyandu');
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
        Schema::dropIfExists('table_user');
    }
}
