<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToCaoOmbudsmanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cao_ombudsman', function (Blueprint $table) {
            $table->foreign(['idtipo'], 'cao_ombudsman_ibfk_1')->references(['idtipo'])->on('cao_tipo_ombudsman')->onUpdate('CASCADE');
            $table->foreign(['idcategoria'], 'cao_ombudsman_ibfk_2')->references(['idcategoria'])->on('cao_categorias_ombudsman')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cao_ombudsman', function (Blueprint $table) {
            $table->dropForeign('cao_ombudsman_ibfk_1');
            $table->dropForeign('cao_ombudsman_ibfk_2');
        });
    }
}
