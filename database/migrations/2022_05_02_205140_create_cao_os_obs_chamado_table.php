<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaoOsObsChamadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cao_os_obs_chamado', function (Blueprint $table) {
            $table->integer('co_obs', true);
            $table->integer('co_chamado')->nullable()->default(0);
            $table->string('co_usuario', 80)->nullable()->default('0');
            $table->text('descricao')->nullable();
            $table->dateTime('dt_obs')->nullable()->default('0000-00-00 00:00:00');
            $table->string('email')->nullable();
            $table->string('arquivo_obs')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cao_os_obs_chamado');
    }
}
