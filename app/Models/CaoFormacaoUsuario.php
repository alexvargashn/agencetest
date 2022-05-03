<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoFormacaoUsuario
 *
 * @property $co_usuario
 * @property $tp_curso
 * @property $ds_curso
 * @property $ds_instituicao
 * @property $dt_conclusao
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoFormacaoUsuario extends Model
{
    
    static $rules = [
		'co_usuario' => 'required',
		'tp_curso' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['co_usuario','tp_curso','ds_curso','ds_instituicao','dt_conclusao'];



}
