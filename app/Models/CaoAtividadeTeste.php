<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoAtividadeTeste
 *
 * @property $co_atividade
 * @property $ds_atividade
 * @property $co_tipo_usuario
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoAtividadeTeste extends Model
{
    
    static $rules = [
		'co_atividade' => 'required',
		'ds_atividade' => 'required',
		'co_tipo_usuario' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['co_atividade','ds_atividade','co_tipo_usuario'];



}
