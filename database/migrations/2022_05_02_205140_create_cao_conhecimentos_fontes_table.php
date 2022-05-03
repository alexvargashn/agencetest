<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaoConhecimentosFontesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cao_conhecimentos_fontes', function (Blueprint $table) {
            $table->integer('idfonte', true);
            $table->integer('idconhecimento')->default(0)->index('idconhecimento');
            $table->dateTime('datahora')->default('0000-00-00 00:00:00');
            $table->string('arquivo', 50)->default('');
            $table->string('caminho', 50)->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cao_conhecimentos_fontes');
    }
}
