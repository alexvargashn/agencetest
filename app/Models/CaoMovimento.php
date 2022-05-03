<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoMovimento
 *
 * @property $co_movimento
 * @property $co_usuario
 * @property $dt_entrada
 * @property $dt_saida_almoco
 * @property $dt_volta_almoco
 * @property $dt_saida
 * @property $is_encerrado
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoMovimento extends Model
{
    
    static $rules = [
		'co_movimento' => 'required',
		'co_usuario' => 'required',
		'dt_entrada' => 'required',
		'dt_saida_almoco' => 'required',
		'dt_volta_almoco' => 'required',
		'dt_saida' => 'required',
		'is_encerrado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['co_movimento','co_usuario','dt_entrada','dt_saida_almoco','dt_volta_almoco','dt_saida','is_encerrado'];



}
