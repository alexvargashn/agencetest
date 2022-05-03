<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoOsDailyReport
 *
 * @property $co_daily
 * @property $co_os
 * @property $co_fase
 * @property $co_usuario
 * @property $ds_assunto
 * @property $tempo_gasto
 * @property $data
 * @property $co_status_atual
 * @property $co_chamado
 * @property $co_atividade
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoOsDailyReport extends Model
{
    
    static $rules = [
		'co_daily' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['co_daily','co_os','co_fase','co_usuario','ds_assunto','tempo_gasto','data','co_status_atual','co_chamado','co_atividade'];



}
