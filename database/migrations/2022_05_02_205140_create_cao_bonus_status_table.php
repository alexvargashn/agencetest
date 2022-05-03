<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaoBonusStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cao_bonus_status', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('co_usuario', 128)->default('');
            $table->date('data_solic')->default('0000-00-00');
            $table->string('mes', 128)->default('');
            $table->string('valor', 128)->default('');
            $table->string('is_solic', 10)->nullable();
            $table->string('is_pg', 10)->nullable();
            $table->string('is_horas', 10)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cao_bonus_status');
    }
}
