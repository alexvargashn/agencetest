<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoMovimentoJustificativa
 *
 * @property $co_movimento_justificativa
 * @property $co_movimento
 * @property $nu_os
 * @property $ds_justificativa
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoMovimentoJustificativa extends Model
{
    
    static $rules = [
		'co_movimento_justificativa' => 'required',
		'co_movimento' => 'required',
		'nu_os' => 'required',
		'ds_justificativa' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['co_movimento_justificativa','co_movimento','nu_os','ds_justificativa'];



}
