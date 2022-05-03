<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoAgendamento
 *
 * @property $co_agendamento
 * @property $dt_hr_inicio
 * @property $dt_hr_fim
 * @property $co_status_agendamento
 * @property $co_diary_report_consultor
 * @property $co_complemento
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoAgendamento extends Model
{
    
    static $rules = [
		'co_agendamento' => 'required',
		'dt_hr_inicio' => 'required',
		'co_status_agendamento' => 'required',
		'co_diary_report_consultor' => 'required',
		'co_complemento' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['co_agendamento','dt_hr_inicio','dt_hr_fim','co_status_agendamento','co_diary_report_consultor','co_complemento'];



}
