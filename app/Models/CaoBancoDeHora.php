<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoBancoDeHora
 *
 * @property $id
 * @property $co_usuario
 * @property $data_cadastro
 * @property $segundos
 * @property $tipo
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoBancoDeHora extends Model
{
    
    static $rules = [
		'co_usuario' => 'required',
		'data_cadastro' => 'required',
		'segundos' => 'required',
		'tipo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['co_usuario','data_cadastro','segundos','tipo'];



}
