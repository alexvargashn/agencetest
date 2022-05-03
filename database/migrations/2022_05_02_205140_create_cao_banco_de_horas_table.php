<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaoBancoDeHorasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cao_banco_de_horas', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('co_usuario')->default('');
            $table->date('data_cadastro')->default('0000-00-00');
            $table->integer('segundos')->default(0);
            $table->string('tipo', 10)->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cao_banco_de_horas');
    }
}
