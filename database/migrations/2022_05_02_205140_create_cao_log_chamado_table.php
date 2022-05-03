<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaoLogChamadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cao_log_chamado', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('co_chamado')->default(0);
            $table->dateTime('dt_chamado')->default('0000-00-00 00:00:00');
            $table->string('co_usuario', 128)->default('');
            $table->integer('co_daily')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cao_log_chamado');
    }
}
