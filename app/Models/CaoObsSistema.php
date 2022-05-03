<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoObsSistema
 *
 * @property $co_obs
 * @property $descricao
 * @property $co_sistema
 * @property $co_usuario
 * @property $dt_obs
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoObsSistema extends Model
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
    protected $fillable = ['co_obs','descricao','co_sistema','co_usuario','dt_obs'];



}
