<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoTipoCusto
 *
 * @property $co_tipo_custo
 * @property $descricao
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoTipoCusto extends Model
{
    
    static $rules = [
		'co_tipo_custo' => 'required',
		'descricao' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['co_tipo_custo','descricao'];



}
