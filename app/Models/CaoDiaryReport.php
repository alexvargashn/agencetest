<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoDiaryReport
 *
 * @property $co_diary_report
 * @property $hr_gasta
 * @property $co_atividade
 * @property $ds_assunto
 * @property $co_movimento
 * @property $nu_os
 * @property $co_sistema
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoDiaryReport extends Model
{
    
    static $rules = [
		'co_diary_report' => 'required',
		'co_atividade' => 'required',
		'ds_assunto' => 'required',
		'co_movimento' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['co_diary_report','hr_gasta','co_atividade','ds_assunto','co_movimento','nu_os','co_sistema'];



}
