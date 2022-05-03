<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoHorarioAlmoco
 *
 * @property $co_usuario
 * @property $almoco_saida_hora
 * @property $almoco_volta_hora
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoHorarioAlmoco extends Model
{
    
    static $rules = [
		'co_usuario' => 'required',
		'almoco_saida_hora' => 'required',
		'almoco_volta_hora' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['co_usuario','almoco_saida_hora','almoco_volta_hora'];



}
