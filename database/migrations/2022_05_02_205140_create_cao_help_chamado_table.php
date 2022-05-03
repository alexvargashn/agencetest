<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaoHelpChamadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cao_help_chamado', function (Blueprint $table) {
            $table->integer('co_chamado', true)->index('co_chamado');
            $table->text('ds_chamado');
            $table->text('ds_solucao')->nullable();
            $table->tinyInteger('co_status')->default(0);
            $table->integer('co_motivo')->default(0);
            $table->integer('co_tela')->default(0);
            $table->integer('co_autor')->default(0);
            $table->integer('co_filial')->default(0);
            $table->bigInteger('co_sistema')->default(0);
            $table->date('dt_chamado')->default('0000-00-00');
            $table->date('dt_solucao')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cao_help_chamado');
    }
}
