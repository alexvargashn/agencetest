<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoSalario
 *
 * @property $co_usuario
 * @property $dt_alteracao
 * @property $brut_salario
 * @property $liq_salario
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoSalario extends Model
{
    
    static $rules = [
		'co_usuario' => 'required',
		'dt_alteracao' => 'required',
		'brut_salario' => 'required',
		'liq_salario' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['co_usuario','dt_alteracao','brut_salario','liq_salario'];



}
