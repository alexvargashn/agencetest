<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoDiaryReportConsultor
 *
 * @property $co_diary_report_consultor
 * @property $co_movimento
 * @property $co_atividade
 * @property $ds_empresa
 * @property $ds_assunto
 * @property $dt_agendamento
 * @property $dt_agendamento_fim
 * @property $vl_fechamento
 * @property $co_cliente
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoDiaryReportConsultor extends Model
{
    
    static $rules = [
		'co_diary_report_consultor' => 'required',
		'co_movimento' => 'required',
		'co_atividade' => 'required',
		'ds_empresa' => 'required',
		'ds_assunto' => 'required',
		'dt_agendamento' => 'required',
		'vl_fechamento' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['co_diary_report_consultor','co_movimento','co_atividade','ds_empresa','ds_assunto','dt_agendamento','dt_agendamento_fim','vl_fechamento','co_cliente'];



}
