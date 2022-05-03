<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoOsChamado
 *
 * @property $co_chamado
 * @property $co_sistema
 * @property $co_os
 * @property $ds_chamado
 * @property $co_tipo
 * @property $co_prioridade
 * @property $co_item
 * @property $descricao
 * @property $ds_solucao
 * @property $tempo
 * @property $dt_chamado
 * @property $status
 * @property $co_usuario
 * @property $co_analista
 * @property $email
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoOsChamado extends Model
{
    
    static $rules = [
		'co_chamado' => 'required',
		'co_sistema' => 'required',
		'co_os' => 'required',
		'ds_chamado' => 'required',
		'co_tipo' => 'required',
		'co_prioridade' => 'required',
		'co_item' => 'required',
		'descricao' => 'required',
		'ds_solucao' => 'required',
		'tempo' => 'required',
		'dt_chamado' => 'required',
		'status' => 'required',
		'co_usuario' => 'required',
		'co_analista' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['co_chamado','co_sistema','co_os','ds_chamado','co_tipo','co_prioridade','co_item','descricao','ds_solucao','tempo','dt_chamado','status','co_usuario','co_analista','email'];



}
