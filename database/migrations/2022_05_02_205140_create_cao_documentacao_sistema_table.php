<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaoDocumentacaoSistemaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cao_documentacao_sistema', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('co_sistema')->default(0);
            $table->text('descricao')->nullable();
            $table->string('pasta', 30)->default('');
            $table->integer('sub_grupo')->nullable();
            $table->string('co_usuario', 60)->default('');
            $table->dateTime('dt_doc')->default('0000-00-00 00:00:00');
            $table->string('arquivo', 100)->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cao_documentacao_sistema');
    }
}
