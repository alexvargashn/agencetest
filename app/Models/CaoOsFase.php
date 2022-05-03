<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoOsFase
 *
 * @property $co_fase
 * @property $descricao
 * @property $descricao_ingl
 * @property $ordem
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoOsFase extends Model
{
    
    static $rules = [
		'co_fase' => 'required',
		'descricao_ingl' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['co_fase','descricao','descricao_ingl','ordem'];



}
