<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaoOmbudsmanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cao_ombudsman', function (Blueprint $table) {
            $table->integer('id', true);
            $table->tinyInteger('idtipo')->default(0)->index('idtipo');
            $table->tinyInteger('idcategoria')->default(0)->index('idcategoria');
            $table->dateTime('data')->default('0000-00-00 00:00:00');
            $table->text('comentario');
            $table->tinyInteger('co_escritorio')->default(0)->index('co_escritorio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cao_ombudsman');
    }
}
