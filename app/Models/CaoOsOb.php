<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoOsOb
 *
 * @property $co_obs
 * @property $co_os
 * @property $co_usuario
 * @property $descricao
 * @property $dt_obs
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoOsOb extends Model
{
    
    static $rules = [
		'co_obs' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['co_obs','co_os','co_usuario','descricao','dt_obs'];



}
