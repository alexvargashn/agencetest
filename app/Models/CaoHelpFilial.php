<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoHelpFilial
 *
 * @property $co_filial
 * @property $no_filial
 * @property $co_cliente
 * @property $estado
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoHelpFilial extends Model
{
    
    static $rules = [
		'co_filial' => 'required',
		'no_filial' => 'required',
		'co_cliente' => 'required',
		'estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['co_filial','no_filial','co_cliente','estado'];



}
