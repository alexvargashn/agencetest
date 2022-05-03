<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaoOsChamadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cao_os_chamado', function (Blueprint $table) {
            $table->integer('co_chamado', true);
            $table->integer('co_sistema')->default(0);
            $table->integer('co_os')->default(0);
            $table->string('ds_chamado')->default('');
            $table->integer('co_tipo')->default(0);
            $table->integer('co_prioridade')->default(0);
            $table->integer('co_item')->default(0);
            $table->text('descricao');
            $table->text('ds_solucao');
            $table->string('tempo', 30)->default('');
            $table->dateTime('dt_chamado')->default('0000-00-00 00:00:00');
            $table->integer('status')->default(0);
            $table->string('co_usuario')->default('');
            $table->string('co_analista')->default('');
            $table->string('email')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cao_os_chamado');
    }
}
