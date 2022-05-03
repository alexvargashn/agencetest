<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoComissao
 *
 * @property $co_comissao
 * @property $co_fatura
 * @property $dt_efetuado
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoComissao extends Model
{
    
    static $rules = [
		'co_comissao' => 'required',
		'co_fatura' => 'required',
		'dt_efetuado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['co_comissao','co_fatura','dt_efetuado'];



}
