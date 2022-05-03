<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoFeriado
 *
 * @property $dia
 * @property $mes
 * @property $ano
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoFeriado extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['dia','mes','ano'];



}
