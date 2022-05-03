<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoAtividadeConsultor
 *
 * @property $co_atividade
 * @property $ds_atividade
 * @property $ativo
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoAtividadeConsultor extends Model
{
    
    static $rules = [
		'co_atividade' => 'required',
		'ds_atividade' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['co_atividade','ds_atividade','ativo'];



}
