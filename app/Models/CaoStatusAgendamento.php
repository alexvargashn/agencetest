<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoStatusAgendamento
 *
 * @property $co_status_agendamento
 * @property $ds_status_agendamento
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoStatusAgendamento extends Model
{
    
    static $rules = [
		'co_status_agendamento' => 'required',
		'ds_status_agendamento' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['co_status_agendamento','ds_status_agendamento'];



}
