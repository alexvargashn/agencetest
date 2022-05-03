<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoObsCliente
 *
 * @property $co_obs
 * @property $descricao
 * @property $co_cliente
 * @property $co_usuario
 * @property $dt_obs
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoObsCliente extends Model
{
    
    static $rules = [
		'co_obs' => 'required',
		'descricao' => 'required',
		'co_cliente' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['co_obs','descricao','co_cliente','co_usuario','dt_obs'];



}
