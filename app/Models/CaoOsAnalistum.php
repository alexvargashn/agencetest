<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoOsAnalistum
 *
 * @property $co_analista
 * @property $co_os
 * @property $co_usuario
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoOsAnalistum extends Model
{
    
    static $rules = [
		'co_analista' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['co_analista','co_os','co_usuario'];



}
