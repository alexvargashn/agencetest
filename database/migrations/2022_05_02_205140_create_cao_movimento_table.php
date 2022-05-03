<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaoMovimentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cao_movimento', function (Blueprint $table) {
            $table->bigIncrements('co_movimento')->index('co_movimento');
            $table->string('co_usuario', 50)->default('');
            $table->dateTime('dt_entrada')->default('0000-00-00 00:00:00');
            $table->dateTime('dt_saida_almoco')->default('0000-00-00 00:00:00');
            $table->dateTime('dt_volta_almoco')->default('0000-00-00 00:00:00');
            $table->dateTime('dt_saida')->default('0000-00-00 00:00:00');
            $table->boolean('is_encerrado')->unsigned()->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cao_movimento');
    }
}
