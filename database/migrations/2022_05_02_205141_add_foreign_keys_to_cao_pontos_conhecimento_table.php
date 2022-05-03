<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToCaoPontosConhecimentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cao_pontos_conhecimento', function (Blueprint $table) {
            $table->foreign(['pontuacao'], 'cao_pontos_conhecimento_ibfk_1')->references(['idescala'])->on('cao_escala_ranking')->onUpdate('CASCADE');
            $table->foreign(['idconhecimento'], 'cao_pontos_conhecimento_ibfk_3')->references(['idconhecimento'])->on('cao_conhecimentos')->onUpdate('CASCADE');
            $table->foreign(['co_coordenador'], 'cao_pontos_conhecimento_ibfk_2')->references(['co_usuario'])->on('cao_usuario')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cao_pontos_conhecimento', function (Blueprint $table) {
            $table->dropForeign('cao_pontos_conhecimento_ibfk_1');
            $table->dropForeign('cao_pontos_conhecimento_ibfk_3');
            $table->dropForeign('cao_pontos_conhecimento_ibfk_2');
        });
    }
}
