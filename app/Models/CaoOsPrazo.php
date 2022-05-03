<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoOsPrazo
 *
 * @property $co_prazo
 * @property $co_os
 * @property $co_fase
 * @property $total_analista
 * @property $total_hora
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoOsPrazo extends Model
{
    
    static $rules = [
		'co_prazo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['co_prazo','co_os','co_fase','total_analista','total_hora'];



}
