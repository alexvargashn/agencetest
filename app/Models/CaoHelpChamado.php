<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoHelpChamado
 *
 * @property $co_chamado
 * @property $ds_chamado
 * @property $ds_solucao
 * @property $co_status
 * @property $co_motivo
 * @property $co_tela
 * @property $co_autor
 * @property $co_filial
 * @property $co_sistema
 * @property $dt_chamado
 * @property $dt_solucao
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoHelpChamado extends Model
{
    
    static $rules = [
		'co_chamado' => 'required',
		'ds_chamado' => 'required',
		'co_status' => 'required',
		'co_motivo' => 'required',
		'co_tela' => 'required',
		'co_autor' => 'required',
		'co_filial' => 'required',
		'co_sistema' => 'required',
		'dt_chamado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['co_chamado','ds_chamado','ds_solucao','co_status','co_motivo','co_tela','co_autor','co_filial','co_sistema','dt_chamado','dt_solucao'];



}
