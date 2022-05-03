<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaoObsClienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cao_obs_cliente', function (Blueprint $table) {
            $table->increments('co_obs');
            $table->string('descricao', 250)->default('');
            $table->unsignedInteger('co_cliente')->default('0');
            $table->string('co_usuario', 30)->nullable()->default('');
            $table->dateTime('dt_obs')->nullable()->default('0000-00-00 00:00:00');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cao_obs_cliente');
    }
}
