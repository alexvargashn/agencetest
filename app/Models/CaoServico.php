<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoServico
 *
 * @property $co_servico
 * @property $ds_servico
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoServico extends Model
{
    
    static $rules = [
		'co_servico' => 'required',
		'ds_servico' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['co_servico','ds_servico'];



}
