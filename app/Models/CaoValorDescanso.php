<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoValorDescanso
 *
 * @property $id
 * @property $co_usuario
 * @property $segundos
 * @property $mes_referencia
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoValorDescanso extends Model
{
    
    static $rules = [
		'co_usuario' => 'required',
		'segundos' => 'required',
		'mes_referencia' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['co_usuario','segundos','mes_referencia'];



}
