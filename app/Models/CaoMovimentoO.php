<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoMovimentoO
 *
 * @property $co_movimento_os
 * @property $nu_os
 * @property $co_sistema
 * @property $co_tipo_movimento
 * @property $nu_valor
 * @property $ds_valor
 * @property $usuario_obs
 * @property $dt_ini
 * @property $dt_fim
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoMovimentoO extends Model
{
    
    static $rules = [
		'co_movimento_os' => 'required',
		'nu_os' => 'required',
		'co_sistema' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['co_movimento_os','nu_os','co_sistema','co_tipo_movimento','nu_valor','ds_valor','usuario_obs','dt_ini','dt_fim'];



}
