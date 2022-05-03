<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaoSalarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cao_salario', function (Blueprint $table) {
            $table->string('co_usuario', 20)->default('');
            $table->date('dt_alteracao')->default('0000-00-00');
            $table->float('brut_salario', 10, 0)->default(0);
            $table->float('liq_salario', 10, 0)->default(0);

            $table->primary(['co_usuario', 'dt_alteracao']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cao_salario');
    }
}
