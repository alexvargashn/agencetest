<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoPagamento
 *
 * @property $co_pagamento
 * @property $co_usuario
 * @property $tp_pagamento
 * @property $dt_pagamento
 * @property $vl_pagamento
 * @property $dt_referencia_pagamento
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoPagamento extends Model
{
    
    static $rules = [
		'co_pagamento' => 'required',
		'co_usuario' => 'required',
		'tp_pagamento' => 'required',
		'dt_pagamento' => 'required',
		'vl_pagamento' => 'required',
		'dt_referencia_pagamento' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['co_pagamento','co_usuario','tp_pagamento','dt_pagamento','vl_pagamento','dt_referencia_pagamento'];



}
