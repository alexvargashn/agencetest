<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaoDrAtivCompTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cao_dr_ativ_comp', function (Blueprint $table) {
            $table->integer('id_ativ_comp', true);
            $table->string('co_usuario', 20)->default('')->index('co_usuario');
            $table->date('data')->default('0000-00-00');
            $table->text('assunto');
            $table->time('tempo_gasto')->default('00:00:00');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cao_dr_ativ_comp');
    }
}
