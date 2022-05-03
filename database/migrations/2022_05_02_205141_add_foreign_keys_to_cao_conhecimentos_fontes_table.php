<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToCaoConhecimentosFontesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cao_conhecimentos_fontes', function (Blueprint $table) {
            $table->foreign(['idconhecimento'], 'cao_conhecimentos_fontes_ibfk_1')->references(['idconhecimento'])->on('cao_conhecimentos')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cao_conhecimentos_fontes', function (Blueprint $table) {
            $table->dropForeign('cao_conhecimentos_fontes_ibfk_1');
        });
    }
}
