<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaoPagamentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cao_pagamento', function (Blueprint $table) {
            $table->bigIncrements('co_pagamento')->index('nu_os');
            $table->string('co_usuario', 20)->default('');
            $table->char('tp_pagamento', 2)->default('0');
            $table->date('dt_pagamento')->default('0000-00-00');
            $table->float('vl_pagamento', 10, 0)->default(0);
            $table->date('dt_referencia_pagamento')->default('0000-00-00');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cao_pagamento');
    }
}
