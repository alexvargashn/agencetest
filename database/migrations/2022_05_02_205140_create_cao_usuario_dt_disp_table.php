<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaoUsuarioDtDispTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cao_usuario_dt_disp', function (Blueprint $table) {
            $table->increments('co_dt_disp');
            $table->string('co_usuario', 20)->nullable();
            $table->date('dt_disp')->default('0000-00-00');
            $table->date('dt_alt')->default('0000-00-00');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cao_usuario_dt_disp');
    }
}
