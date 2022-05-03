<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToCaoHistOcorrenciasOsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cao_hist_ocorrencias_os', function (Blueprint $table) {
            $table->foreign(['co_usuario'], 'cao_hist_ocorrencias_os_ibfk_1')->references(['co_usuario'])->on('cao_usuario')->onUpdate('CASCADE')->onDelete('SET NULL');
            $table->foreign(['co_os'], 'cao_hist_ocorrencias_os_ibfk_2')->references(['co_os'])->on('cao_os')->onUpdate('CASCADE')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cao_hist_ocorrencias_os', function (Blueprint $table) {
            $table->dropForeign('cao_hist_ocorrencias_os_ibfk_1');
            $table->dropForeign('cao_hist_ocorrencias_os_ibfk_2');
        });
    }
}
