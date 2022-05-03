<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaoParticipacaoFuncionarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cao_participacao_funcionario', function (Blueprint $table) {
            $table->increments('co_part_funcionario');
            $table->float('pc_participacao', 10, 0)->unsigned()->default(0);
            $table->string('co_usuario', 20)->default('');
            $table->unsignedTinyInteger('co_escritorio')->default('0');
            $table->date('dt_referencia')->default('0000-00-00');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cao_participacao_funcionario');
    }
}
