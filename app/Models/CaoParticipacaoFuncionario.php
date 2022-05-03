<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoParticipacaoFuncionario
 *
 * @property $co_part_funcionario
 * @property $pc_participacao
 * @property $co_usuario
 * @property $co_escritorio
 * @property $dt_referencia
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoParticipacaoFuncionario extends Model
{
    
    static $rules = [
		'co_part_funcionario' => 'required',
		'pc_participacao' => 'required',
		'co_usuario' => 'required',
		'co_escritorio' => 'required',
		'dt_referencia' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['co_part_funcionario','pc_participacao','co_usuario','co_escritorio','dt_referencia'];



}
