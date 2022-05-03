<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaoClienteContatoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cao_cliente_contato', function (Blueprint $table) {
            $table->unsignedInteger('co_cliente')->default('0')->primary();
            $table->date('dt_contato')->nullable()->default('0000-00-00');
            $table->unsignedInteger('fg_agendado')->nullable()->default('0');
            $table->time('hr_ini')->nullable()->default('00:00:00');
            $table->time('hr_end')->nullable()->default('00:00:00');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cao_cliente_contato');
    }
}
