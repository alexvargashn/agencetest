<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaoDiaryReportConsultorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cao_diary_report_consultor', function (Blueprint $table) {
            $table->integer('co_diary_report_consultor', true);
            $table->integer('co_movimento')->default(0);
            $table->integer('co_atividade')->default(0);
            $table->mediumText('ds_empresa');
            $table->mediumText('ds_assunto');
            $table->dateTime('dt_agendamento')->default('0000-00-00 00:00:00');
            $table->dateTime('dt_agendamento_fim')->nullable();
            $table->float('vl_fechamento', 10, 0)->unsigned()->default(0);
            $table->bigInteger('co_cliente')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cao_diary_report_consultor');
    }
}
