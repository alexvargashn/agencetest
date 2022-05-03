<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoCusto
 *
 * @property $co_custo
 * @property $co_tipo_custo
 * @property $descricao
 * @property $co_escritorio
 * @property $dt_compra
 * @property $dt_pagamento
 * @property $co_boleto
 * @property $valor
 * @property $parcela
 * @property $pag
 * @property $co_custo_high
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoCusto extends Model
{
    
    static $rules = [
		'co_custo' => 'required',
		'co_tipo_custo' => 'required',
		'descricao' => 'required',
		'co_escritorio' => 'required',
		'valor' => 'required',
		'co_custo_high' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['co_custo','co_tipo_custo','descricao','co_escritorio','dt_compra','dt_pagamento','co_boleto','valor','parcela','pag','co_custo_high'];



}
