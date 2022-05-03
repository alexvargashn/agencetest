<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoMenuContador
 *
 * @property $co_usuario
 * @property $co_menu
 * @property $nu_pontos
 * @property $in_processado
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoMenuContador extends Model
{
    
    static $rules = [
		'co_usuario' => 'required',
		'co_menu' => 'required',
		'nu_pontos' => 'required',
		'in_processado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['co_usuario','co_menu','nu_pontos','in_processado'];



}
